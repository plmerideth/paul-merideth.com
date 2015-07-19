<?php
	/*
	This script does the following:
		- defines constants and settings
		- dictates how errors are handled
		- defines other useful functions

	Created by:  Paul Merideth
	Date:  2/24/2015
    Modified:  7/11/2015
	*/

	//Custom Debug code
	//include('includes\myDebug.inc.php');

	//Settings
	define('LIVE', FALSE);

	//Admin contact address
	define('EMAIL', 'paul.merideth@gmail.com');

	//Site URL (base for all redirections)
	define('BASE_URL', 'http://www.paul-merideth.com/');

	//Location of mySQL connection script
	define('MYSQL', '/home/paulme9/public_html/paul-merideth.com/includes/mysqli_connect.php'); 
        
	//Adjust time zone for PHP 5.1 and greater
	date_default_timezone_set('America/Denver');

	//Define error handling function
	function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars)
	{
		$message = "An error has occurred in script '$e_file' on line '$e_line: $e_message\n";

		//Add current date and time
		$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n";

		if(!LIVE) //If not LIVE system, print detailed message
		{
			echo '<div class="error">' . nl2br($message);
			echo '<pre>' . print_r($e_vars, 1) . "\n";
			debug_print_backtrace();
			echo '</pre></div>';
		}
		else //If LIVE, email details to admin & print generic message
		{
			$body = $message . "\n" . print_r($e_vars, 1);
			
			/* Code to use when Email is available via IM Hosting
			mail(EMAIL, 'Site Error!', $body, 'From: email')
			if( $e_number != E_NOTICE) //E_NOTICE type errors are for bad style and errors in code.
			{
				echo '<div class="error">A system error has occurred.  We apologize for the inconvenience.</div><br />';
			}
			*/

			echo '<p class="error">An error has occured.  Email sent to Admin</p>';
			// myShowVar('$body = ', $body);
		}
	}
	set_error_handler("my_error_handler");