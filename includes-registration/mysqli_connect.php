<?php #Script 18.4 - mysqli_connect.php, pg. 571
//NOTE:  This script is included in other scripts and does not include a closing PHP tag to avoid potential "headers already sent" errors.	

	//Set database names as constants for security purposes
	DEFINE('DB_USER', 'paulme9_admin');
	DEFINE('DB_PASSWORD', 'paW2872Cast');
	DEFINE('DB_HOST', "");
	DEFINE('DB_NAME', 'paulme9_registration');
	
	//Error suppressed with @.  Use custom error handling function defined in config.inc.php
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
	//If no connection can be made, trigger an error
	if(!$dbc)
	{
        //Use trigger_error() to produce a specific message for the error.  A custom error handler function has also been set.
		trigger_error('Could not connect to mySQL: ' . mysqli_connect_error());
	}
	else
	{
		//Set encoding
		$charset = mysqli_set_charset($dbc, 'utf8');
	}
	
