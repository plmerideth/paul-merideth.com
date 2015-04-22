<?php
	/*Redirect if this page is accessed directly.
	 * It would be missing the header and footer.
	 * The constant 'BASE_URL is defined in config.inc.php
	 * and will only be defined if that file has been included.
     * If it hasn't been defined, we assume this page
     * has been accessed directly.
	 * header.htm includes config.inc.php
	 */
	if(!defined('BASE_URL'))
	{
		require('includes/config.inc.php');
		//Redirect to home page
		$url=BASE_URL . 'index.php';
		header("Location: $url");
		exit;
	}

	if(isset($_GET['f']))
    {
		$param=$_GET['f'];
		//echo '<p>Param = ' . $param . '</p>';
	}
?>

<div class="divRegistration">
    <br/>
    <br/>
    <br/>
    <div class="divRegistrationForm">
        <h1>Registration Form</h1>
        <h2>Registration Fee:  $150</h2>
        <br/><br/><br/>
        <form action="index.php?p=thankYou" method="post">
            <p><label for="name" class="registrationName">Name: </label><input type="text" class="inputName" id="name" size="30" maxlength="60" /></p>
            <p><label for="address" class="registrationAddress">Address: </label><input type="text" class="inputAddress" id="address" size="30" maxlength="80" /></p>
            <p><label for="city" class="registrationCity">City: </label><input class="inputCity" id="city" size="30" maxlength="40"></p>
            <p><label for="state" class="registrationState">State: </label><input class="inputState" id="state" size="30" maxlength="40" /></p>
            <p><label for="zip" class="registrationZip">Zip Code: </label><input class="inputZip" id="zip" size="10" maxlength="10" /></p>
            <p><label for="submit" class="registrationSubmit"></label><input type="submit" class="submitButton" id="submit" value="Submit!" /></p>
        </form>
        <br/>
        <h2>NOTICE:  This is not a real event.</h2>
    </div>
</div>