<?php #Script 18.7, activate.php, pg. 586
	require('../includes-registration/config.inc.php');
	$page_title="Activate Your Account";
	include('../includes-registration/header.html');

	//Validate Email & validation code that should have been passed into this page with values stored in DB
	if(isset($_GET['x'], $_GET['y']) && filter_var($_GET['x'], FILTER_VALIDATE_EMAIL) && (strlen($_GET['y'])==32))
	{
		//All data valid, so attempt to activate users account
		//Set active column to NULL (removing activation code)
		require(MYSQL);
		$q="UPDATE users
			SET active=NULL 
			WHERE(email='" . mysqli_real_escape_string($dbc, $_GET['x']) . "' AND active='" . mysqli_real_escape_string($dbc, $_GET['y']) . "') 
			LIMIT 1";
		$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

		if(mysqli_affected_rows($dbc) == 1)
		{
			echo '<h3>Your account is now active.  You may log in.</h3>';
		}
		else
		{
			echo '<p class="error">Your account could not be activated.  Please re-check the link or contact system administrator.</p>';
		}
		mysqli_close($dbc);
	}
	else //Redirect, someone trying to hack into page
	{
		$url=BASE_URL . 'index.php';
		ob_end_clean();
		header("Location: $url");
		exit();
	} //End of main IF

	include('../includes-registration/footer.html');
?>
