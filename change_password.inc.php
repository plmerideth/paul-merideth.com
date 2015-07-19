<?php
	//Redirect user if not logged in
	if(!isset($_SESSION['user_id']))
	{
		$url=BASE_URL . 'index.php';
		ob_end_clean();
		header("Location: $url");
		exit();
	}    
        
	//Check for form submission
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		require(MYSQL);
		//Validate submitted password
		$p=FALSE;
		if(preg_match('/^(\w){4,20}$/', $_POST['password1']))
		{
			if($_POST['password1']==$_POST['password2'])
			{
				$p=mysqli_real_escape_string($dbc, $_POST['password1']);
			}
			else
			{
				echo '<p class="error">ERROR:  Passwords do not match!</p>';
			}
		}
		else
		{
			echo '<p class="error">ERROR:  Please enter a valid password!</p>';
		}

		//If valid, update password
		if($p)
		{
			$q="UPDATE users 
				SET pass=SHA1('$p') 
				WHERE user_id={$_SESSION['user_id']} 
				LIMIT 1";
			$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

			if(mysqli_affected_rows($dbc)==1) //Password changed.  NOTE: Can't make new PW same as old PW because the column won't change and the affected rows = 0
			{
				echo '<h3>Your password has been changed.</h3>';
				mysqli_close($dbc);
				//include('../includes-registration/footer.html');
				exit();
			}
			else
			{
				echo '<p class="error">Your password was not changed.  Make sure your new password is different than the current password.  
					Contact the system administrator if you think an error has occurred.</p>';
			}
		}
		else
		{
			echo '<p class="error">Please try again</p>';
		}
		mysqli_close($dbc);
	} //End of Submit IF
?>

<!-- Create HTML Form -->
<h1 class='loginForm'>Change Your Password</h1><br/><br/>
<form action="index.php?p=changePW" method="post">
	<fieldset class="fieldsetLogin">
        <label class="formLabels" for="password1"><b>New Password:</b></label>
			<input type="password" class="classInput" name="password1" size="20" maxlength="20"/>
			<p class="smallLetters">Use only letters, numbers, and the underscore.  Must be between 4 and 20 characters long.</p>
            <label class="formLabels" for="password2"><b>Confirm New Password:</b></label>
			<input type="password" class=classInput" name="password2" size="20" maxlength="20"/>
            <div align="center"><input type="submit" class="submitLogin" name="submit" value="Change Password"/></div>
	</fieldset>
	
</form>
