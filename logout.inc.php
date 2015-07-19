<?php
    if(!defined('BASE_URL'))
	{
		require('includes/config.inc.php');
		//Redirect to home page
		$url=BASE_URL . 'index.php';
		header("Location: $url");
		exit;
	}
    else
	{
		$_SESSION = array(); //Wipe out session data
		session_destroy(); //Destroy session
		setcookie(session_name(), '', time()-3600); //Delete session cookie (named by calling session_name())
        
        //Redirect to home page
		$url=BASE_URL . 'index.php';
		header("Location: $url");
		exit;        
	}
?>
