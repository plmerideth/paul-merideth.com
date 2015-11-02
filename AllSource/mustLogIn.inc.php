<?php
    if(!defined('BASE_URL'))
	{
		require('includes/config.inc.php');
		//Redirect to home page
		$url=BASE_URL . 'index.php';
		header("Location: $url");
		exit;
	}
?>

<main>
    <div class="divMustLogIn">
        <h1>You must be logged in to access this site!</h1>
        <p class="mainText">
            Please log in or register as a new user if you do not have an account.
        </p>
    </div>
</main>
