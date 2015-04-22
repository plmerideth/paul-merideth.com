<?php #Script 18.10, forgot_password.php, pg. 594
	require('../includes-registration/config.inc.php');
	$page_title="Password Reset";
	include('../includes-registration/header.html');

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
		$mail->Subject='Temporary Password';
		$mail->Body=$msg_content;
			
		if(!$mail->send())
                  return FALSE;
		else
                  return TRUE;
	}
    
	//Check to see if form submitted
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		require(MYSQL);
		$uid=FALSE; //Flag to indicate valid User ID, assume FALSE to begin

		if(!empty($_POST['email']))
		{
			$q='SELECT user_id
				FROM users 
				WHERE email="' . mysqli_real_escape_string($dbc, $_POST['email']) . '"';
			$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

			if(mysqli_num_rows($r)==1)
			{
				//Use list() to copy return array from mysqli_fetch_array() into $uid
				list($uid)=mysqli_fetch_array($r, MYSQLI_NUM);
			}
			else
			{
				echo '<p class="error">The submitted email address does not match those on file1</p>';
			}
		}
		else
		{
			echo '<p class="error">Please enter an Email address</p>';
		}

		//If email address valid, create new, random password
		if($uid)
		{
			$p=substr(md5(uniqid(rand(), true)), 3, 10); //pull out temp, rand 10-char password, starting at 3rd char
			//Change PW in DB
			$q="UPDATE users 
				SET pass=SHA1('$p') 
				WHERE user_id=$uid 
				LIMIT 1";
			$r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
			if(mysqli_affected_rows($dbc)==1)
			{
				$body="Your password has been temporarily changed to '$p'.  Please log in using this password, then you may change your password to any valid password.";
                
                if(send_mail($body, $_POST['email'], 'admin@paul-merideth.com'))
                {
                    echo '<h3>Thank you!  A temporary password has been sent to your Email address.</h3>';
                }
                else
                {
                    echo '<p>Mail send failed.  Please contact Paul Merideth at admin@paul-merideth.com to have your password reset manually.</p>';
                }
				
                echo '<h3>Your password has been changed.  You will receive the new, temporary password at the email address you registered.
				  Once you have logged in with this password, you may change it by clicking on the "Change Password" menu option.</h3>';

				mysqli_close($dbc);
				include('../includes-registration/footer.html');
				exit();
			}
			else
			{
				echo '<p class="error">Your password could not be changed due to a system error.  We apologize for any inconvenience</p>';
			}
		}
		else
		{
			echo '<p class="error">Please try again</p>';	
		}
		mysqli_close($dbc);
	}// End of main submit IF
?>

<!-- Show HTML Form -->
<h1>Reset Your Password</h1><br/>
<p>Enter your Email address below and you password will be reset.</p><br/>
<form action="forgot_password.php"method="post">
	<fieldset>
		<p><b>Email Address:</b>
			<input type="text" name="email" class="classInput" size="20" maxlength="60"
				value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"
			/>
		</p>
	</fieldset>
	<div align="left"><input type="submit" class="submitLogin" name="submit" value="Reset Password"/></div>
</form>

<?php include('../includes-registration/footer.html');?>

