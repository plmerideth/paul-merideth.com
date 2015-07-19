<?php    
    if(!defined('BASE_URL'))
    {
        require('includes/config.inc.php');
        //Redirect to home page
        $url=BASE_URL . 'index.php';
        header("Location: $url");
        exit;
    }
    
  	/*
	 * Taken from Script 11.1, IMemail.php, which I built to use InMotion's Email server with PHPMailer.
	 * Email sent from admin@paul-merideth.info.  Using InMotion Email server.
	 */
	// Uncomment for InMotion ...
	function send_mail($msg_content, $s_email, $s_name)
	{
		require '/home/paulme9/public_html/includes/PHPMailer/PHPMailerAutoload.php';
		$mail=new PHPMailer;
		$mail->isSMTP();
		$mail->Host='secure150.inmotionhosting.com';
		$mail->SMTPAuth=true;
		$mail->Username='admin@paul-merideth.com';
		$mail->Password='paW2872Cast';
		$mail->SMTPSecure="ssl";
		$mail->Port=465;
		$mail->SMTPDebug = 0;	//0=none, 1=commands, 2=commands+data
		$mail->Debugoutput = 'html';
		$mail->From='admin@paul-merideth.com';
		$mail->FromName=$s_name;
		$mail->Sender=$s_email;
		$mail->ReturnPath='admin@paul-merideth.com';
		$mail->addAddress($s_email, $s_name);
		$mail->WordWrap = 60;
		$mail->Subject='Registration for paul-merideth.com';
		$mail->Body=$msg_content;
			
		if(!$mail->send())
                  return FALSE;
		else
                  return TRUE;
	}
    
	//Check for form submission
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		require(MYSQL);
		//Run every element in $_POST array thru trim() & assign result to the new $trimmed array
		$trimmed = array_map('trim', $_POST);
		$fn = $ln = $e = $p = FALSE; //Assign four new variables to FALSE

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

		//Validate the passwords
		if(preg_match('/^\w{4,20}$/', $trimmed['password1']))
		{
			if($trimmed['password1'] == $trimmed['password2'])
			{
				$p=mysqli_real_escape_string($dbc, $trimmed['password1']);
			}
			else
			{
				echo '<p class="error">ERROR:  Your password did not match the confirmed password!</p>';
			}
		}
		else
		{
			echo '<p class="error">ERROR:  Please enter a valid password!</p>';
		}

		//If form passed every test, check for unique email address
		if($fn && $ln && $e && $p)
		{
			$q="SELECT user_id
				FROM users 
				WHERE email='$e'";
			$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
		
			//If email address unique, submit registation request
			if(mysqli_num_rows($r)==0) //Email address unique and OK
			{
				$a=md5(uniqid(rand(), true));
				$q="INSERT INTO users(email, pass, first_name, last_name, active, registration_date) 
					VALUES ('$e', SHA('$p'), '$fn', '$ln', '$a', NOW())";
				$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

				//Send approal request Email if registration worked
				if(mysqli_affected_rows($dbc)==1)
				{                    
                    $body = $fn . ' ' . $ln . " has requested registration, approval needed.  If approved, please click on this link:\n\n";
					$body .= BASE_URL . 'approve.inc.php?x=' . urlencode($e) . "&y=$a";
                    $sender_name = $fn . ' ' . $ln;

                    /*
                       myShowVar("body = ", $body);
                       myShowVar("e =", $e);
                       myShowVar("sender_name = ", $sender_name);
                    */
                   if(send_mail($body, "paul.merideth@gmail.com", $sender_name))
                   {
                    mysqli_close($dbc);
                    echo '<h1>Thank you!</h1><br/><br/>';
                    echo '<h3>Your request for registration has been received.  Upon approval, you will be sent an Email with a link to activate your account.</h3>';
					//include('../includes/footer.htm');
					exit();
                   }
                   else
                   {
                    echo '<p>Mail send failed.</p>';
                    mysqli_close($dbc);
                    echo '<p>DB closed-message fail</p>';
                    //include('../includes/footer.htm');
                    exit();
					/*  Uncomment for debugging
					echo 'Message cound not be sent';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
					*/
                   }
				}
				else //Print errors if INSERT INTO users query did not run ok
				{
					echo '<p class="error">ERROR:  You could not be registered due to a system error.  We apologize for any inconvenience.</p>';
				}
			}
			else
			{
				echo '<p class="error">ERROR:  That email address has already been registered.  If you have forgotten your password, use the link at right to have your password sent to you.</p>';
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
<h1 class="registerForm">Register</h1>
<form action="index.php?p=registration" method="post">
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
            <label for="password1" class="formLabels"><b>Password:</b></label>
			<input type="password" name="password1" size="20" maxlength="20"
				value="<?php if(isset($trimmed['password1'])){echo $trimmed['password1'];}?>"
			/>
            <p class="smallLetters"><small>Password uses only letters, numbers, and the underscore.  Must be between 4 and 20 characters long.</small></p>
            <label for="password2" class="formLabels"><b>Confirm password:</b></label>
			<input type="password" name="password2" size="20" maxlength="20"
				value="<?php if(isset($trimmed['password2'])){echo $trimmed['password2'];}?>"
			/>
            <div align="center"><input type="submit" class="submitLogin" name="submit" value="Register"/></div>
		</fieldset>
	
</form>