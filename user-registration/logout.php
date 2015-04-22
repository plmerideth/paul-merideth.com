<?php #Script 18.9, logout.php, pg. 593
	require('../includes-registration/config.inc.php');
	$page_title="Logout";
	include('../includes-registration/header.html');

	//Redirect if user not logged in
	if(!isset($_SESSION['first_name'])) //Check for $_SESSION['first_name'] to determine login status
	{
		$url=BASE_URL . 'index.php';
		ob_end_clean();
		header("Location: ", $url);
		exit();
	}
	else //Log out user
	{
		$_SESSION = array(); //Wipe out session data
		session_destroy(); //Destroy session
		setcookie(session_name(), '', time()-3600); //Delete session cookie (named by calling session_name())

		echo '<h3>You are now logged out.</h3>';
		include('../includes-registration/footer.html');
	}
?>
