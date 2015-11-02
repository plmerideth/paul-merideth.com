<?php
	//Redirect user if not logged in
	if(!isset($_SESSION['user_id']))
	{
		$url=BASE_URL . 'index.php';
		ob_end_clean();
		header("Location: $url");
		exit();
	}    
    
    $currentEmail = $_SESSION['email'];    
    $trimmed = array_map('trim', $_SESSION);
    
	//Check for form submission
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		require(MYSQL);
		//Run every element in $_POST array thru PHP function trim() & assign result to the new $trimmed array
		$trimmed = array_map('trim', $_POST);
		$fn = $ln = $e = FALSE; //Assign three new variables to FALSE

		//Validate first and last names
		//Regular expr check for first name.
		//Can only contain letters, a period, an apostrophe, a space and a dash
		//Must be between 2-20 chars long
		if(preg_match('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])) 
		{
			$fn=mysqli_real_escape_string($dbc, $trimmed['first_name']);
		}
		else
		{
			echo '<p class="error">ERROR:  Please enter your first name!</p>';
		}
		
		//Check last name.  Same expr as first, except up to 40 chars
		if(preg_match('/^[A-Z \'.-]{2,40}$/i', $trimmed['last_name']))
		{
			$ln=mysqli_real_escape_string($dbc, $trimmed['last_name']);
		}
		else
		{
			echo '<p class="error">ERROR:  Please enter your last name!</p>';
		}			 
	
		//Validate Email address
		if(filter_var($trimmed['email'], FILTER_VALIDATE_EMAIL))
		{
			$e=mysqli_real_escape_string($dbc, $trimmed['email']);
		}
		else
		{
			echo '<p class="error">ERROR:  Please enter a valid Email address!</p>';
		}

		//If form passed every test, check for unique email address
		if($fn && $ln && $e)
		{     
            if($e == $currentEmail) //Email has not been changed
            {
                $q="UPDATE users 
                    SET first_name='$fn', last_name='$ln'
                    WHERE user_id={$_SESSION['user_id']}";
                
                $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                if(mysqli_affected_rows($dbc)==1)
                {
                    $_SESSION['first_name']=$fn;
                    $_SESSION['last_name']=$ln;
                    echo '<h3>Your account has been updated.</h3>';
                	mysqli_close($dbc);				
                    exit();                                                                                
                }
                else //Print errors if INSERT INTO users query did not run ok
                {
                    echo '<p class="error">ERROR:  Your account could not be updated due to a system error.  We apologize for any inconvenience.</p>';
                }                                
            }
            else //new Email address
            {
                $q="SELECT user_id
                    FROM users 
                    WHERE email='$e'";
                $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                //If email address unique, submit registation request
                if(mysqli_num_rows($r)==0) //Email address unique and OK
                {
                    $q="UPDATE users
                        SET first_name='$fn', last_name='$ln', email='$e'
                        WHERE user_id={$_SESSION['user_id']}";
                        
                    $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                    if(mysqli_affected_rows($dbc)==1)
                    {                                        
                        $_SESSION['first_name']=$fn;
                        $_SESSION['last_name']=$ln;
                        $_SESSION['email']=$e;
                        echo '<h3>Your account has been updated.</h3>';
                		mysqli_close($dbc);				
                        exit();                                                                                
                    }
                    else //Print errors if INSERT INTO users query did not run ok
                    {
                        echo '<p class="error">ERROR:  Your account could not be updated due to a system error.  We apologize for any inconvenience.</p>';
                    }                
                }
                else
                {
                    echo '<p class="error">ERROR:  That email address has already been registered.  If you have forgotten your password, use the link at right to have your password sent to you.</p>';
                }                
			}
		}
		else
		{
			echo '<p class="error">ERROR:  Please try again.</p>';
		}
		mysqli_close($dbc);
	}
?>

<!-- Begin HTML form -->
<h1 class="registerForm">Your Account Settings</h1>
<form action="index.php?p=showAccount" method="post">
	<fieldset class="fieldsetLogin">
        <label for="first_name" class="formLabels"><b>First Name:</b></label>
		<input type="text" name="first_name" size="20" maxlength="20"
			value="<?php if(isset($trimmed['first_name'])){echo $trimmed['first_name'];}?>"
		/>
        <label for="last_name" class="formLabels"><b>Last Name:</b></label>
        <input type="text" name="last_name" size="20" maxlength="40"
			value="<?php if(isset($trimmed['last_name'])){echo $trimmed['last_name'];}?>"
		/>
        </br>
        <label for="email" class="formLabels"><b>Email Address:</b></label>
		<input type="text" name="email" size="30" maxlength="60"
			value="<?php if(isset($trimmed['email'])){echo $trimmed['email'];}?>"
		/>
        <div align="center"><input type="submit" class="submitLogin" name="submit" value="Update"/></div>            
	</fieldset>
</form>
<br/>
<form action="deleteAccount.inc.php" method="post">
    <fieldset class="fieldsetLogin">
              <div align="center"><input type="submit" class="submitLogin" name="submit" value="Delete Account"/></div>
    </fieldset>
</form>