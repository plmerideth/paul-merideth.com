
<?php
	//Redirect user if not logged in
	if(!isset($_SESSION['user_id']))
	{
		$url=BASE_URL . 'index.php';
		ob_end_clean();
		header("Location: $url");
		exit();
	}    

    
	//Check for form submission & connect to DB
	if($_SERVER['REQUEST_METHOD']=='POST')
	{                
		require(MYSQL);        
        
		if(!empty($_POST['email']))
		{
			$e=mysqli_real_escape_string($dbc, $_POST['email']);
		}
		else
		{
			$e=FALSE;
			echo '<p class="error">ERROR:  Please enter an Email address!</p>';
		}

		if(!empty($_POST['pass']))
		{
			$p=mysqli_real_escape_string($dbc, $_POST['pass']);
		}
		else
		{
			$p=FALSE;
			echo '<p class="error">ERROR:  Please enter your password!</p>';
		}

		//If email and pass are both valid, retrieve user info
		if($e && $p)
		{            
			$q="SELECT user_id, first_name, last_name, email, pass, user_level, app_id 
				FROM users 
				WHERE(email='$e' AND pass=SHA1('$p')) AND active IS NULL";
			$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

			if(@mysqli_num_rows($r) == 1)
			{          
				//Store retrieved values in $_SESSION
				$_SESSION = mysqli_fetch_array($r, MYSQLI_ASSOC);
                                
				mysqli_free_result($r);
                
                mysqli_close($dbc);              
                
				//Redirect user to showAccount.inc.php               
                $url=BASE_URL . 'index.php?p=showAccount';
				ob_end_clean();
				header("Location: $url");
				exit();                 
			}
			else
			{
				echo '<p class="error">ERROR:  Either the email and password you entered do not match or you have not activated your account yet.</p>';
			}
		}
		else
		{
			echo '<p class="error">ERROR:  Please try again.</p>';
		}
		mysqli_close($dbc);
	} //End of submit IF        
?>    
    
<!-- Display HTML Form -->
<h1 class="loginForm">Manage My Account</h1>
<form action="index.php?p=manageMyAccount" method="post">
	<fieldset class="fieldsetLogin">
        <label for="email" class="formLabels"><b>Email Address:</b></label>
        <input type="text" class="classInput" name="email" size="20" maxlength="60"/>
        <label for="pass" class="formLabels"><b>Password:</b></label>
        <input type='password' class="classInput" name="pass" size="20" maxlength="20"/>
        <br/><br/>
        <div align="center"><input type="submit" class="submitLogin" name="submit" value="Edit My Account"/></div>
	</fieldset>
</form>