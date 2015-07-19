<?php
    /* This script runs when administrator approves registration request by clicking link in notification email.  It does the following:
     * 1.  Validates email and temporary password sent in as parameters.
     * 2.  Reads email and active values from database of user requesting registration.
     * 3.  Sends an email to requestor indicating approval and a link to activate their account.
     */

    require('/home/paulme9/public_html/paul-merideth.com/includes/config.inc.php');
	$page_title="Approve Registration Request";
	include('/home/paulme9/public_html/paul-merideth.com/includes/header.htm');
    //Custom Debug code
	//include('/includes-registration/myDebug.inc.php');
    
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
    
	//Validate Email & validation code that should have been passed into this page with values stored in DB
	if(isset($_GET['x'], $_GET['y']) && filter_var($_GET['x'], FILTER_VALIDATE_EMAIL) && (strlen($_GET['y'])==32))
	{
		//All data valid, so send  activation Email to requestor.
		require(MYSQL);
		$q="SELECT email, active
			FROM users
			WHERE(email='" . mysqli_real_escape_string($dbc, $_GET['x']) . "' AND active='" . mysqli_real_escape_string($dbc, $_GET['y']) . "') 
			LIMIT 1";
		$r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
        
		if(mysqli_affected_rows($dbc) == 1)
		{
            $row=mysqli_fetch_array($r, MYSQLI_ASSOC);
            
            $e=$row['email'];
            $a=$row['active'];
            /*
            echo '<p>email = ' . $e . '</p>';
            echo '<p>active = ' . $a . '</p>';
             */
            
            $body="Your registration request at www.paul-merideth.com has been approved.\n";
            $body .= "TO ACTIVATE YOUR ACCOUNT, please click on this link:\n\n";
			$body .= BASE_URL . 'activate.inc.php?x=' . urlencode($e) . "&y=$a";
			
            /*
                myShowVar("body = ", $body);
                myShowVar("e =", $e);
                myShowVar("sender_name = ", $sender_name);
            */
            
            if(send_mail($body, $e, "admin@paul-merideth.com"))
            {
                mysqli_close($dbc);
                echo '<h3>Approval notification and an activation link has been sent to ' . $e . '</h3>';
                //include('../includes-registration/footer.html');
				exit();
            }
            else
            {
                echo '<p>Mail send failed.</p>';
                mysqli_close($dbc);
                echo '<p>DB closed-message fail</p>';
                include('../includes-registration/footer.html');
                exit();
                /*  Uncomment for debugging
                    echo 'Message cound not be sent';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                */
            }
        }
		else //Print errors if INSERT INTO users query did not run ok
		{
			echo '<p class="error">You could not be registered due to a system error.  We apologize for any inconvenience.</p>';
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

	//include('../includes-registration/footer.html');
?>
