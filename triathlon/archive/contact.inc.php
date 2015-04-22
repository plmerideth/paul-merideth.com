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
?>

<div class="divContact">
        
    <?php        
	if(isset($_GET['f']))
    {
		$param=$_GET['f'];
		//echo '<p>Param = ' . $param . '</p>';
	}
    
		//Define function to filter for SPAM
		function spam_scrubber($value)
		{
			//Create list of really bad things that wouldn't be in legitimate contact form.  If present, then it's a SPAM attempt
			$very_bad = array('to:',
					'cc:',
					'bcc:',
					'content-type:',
					'mime-version:',
					'multipart-mixed:',
					'content-transfer-encoding:');

			//Loop thru array.  If any matches, return an empty string
			foreach($very_bad as $v)
			{
				if(stripos($value, $v) !== false)	//stripos() searches for any instance (case insens) of $v in $value.  Returns true if anything found.
					return '';
			}

			/* Newline chars are required to create proper headers and thus needed for spam.  However,
			a Return or Enter in the text area will also create a newline.  Any found newlines will
			be replaced by a space.  Some formatting may be lost, but it's the price for filtering spam.
			NOTE:  the case sensitive version of str_replace() isn't necessary because \r is a new line
			but /R is not */
			$value=str_replace(array('\r', '\n', "%0a", "%0d"), ' ', $value);
            
			return trim($value);  //Trim any leading and trailing spaces.
		}

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			/* array_map() returns an array after applying the callback function to every element within the array passed as a parameter.
			Thus, it will take every element of $_POST, call spam_scrubber($_POST['0']) and return the result to $scrubbed[0].
			It does this for every element in $_POST.
			*/ 
			$scrubbed=array_map('spam_scrubber', $_POST);
			
            //Minimal form validation
			if(!empty($scrubbed['name']) && !empty($scrubbed['email']) && !empty($scrubbed['comments'])) //Scrubbed data good
			{
				$sender_email=filter_var($scrubbed['email'], FILTER_VALIDATE_EMAIL);
				if($sender_email) //Email address is valid
				{
					$sender_name=filter_var($scrubbed['name'], FILTER_SANITIZE_STRING);
					$sender_comments=filter_var($scrubbed['comments'], FILTER_SANITIZE_STRING);

					if($sender_name && $sender_comments) //Content is filtered and complete
					{
						$body="Name: $sender_name\n\nEmail: $sender_email\n\nComments: $sender_comments";
						$sender_email="admin@paul-merideth.info"; //Sending with my Email server in InMotion.

						// Uncomment for InMotion
						// Send the mail
						//send_mail($body, $sender_email, $sender_name);
                        echo '<br/><br/><br/><p class="thankYou">Email sent, thank you!</p>'; //This line of code for CIT 230 Class
						
						// myShowVar("scrubber = ", $scrubbed);
						/* Code to use PHP mail() function with Email server
						if(mail('paul.merideth@gmail.com', 'Contact Test Message', $body, 'From: paul-merideth@localhost'))
						{
							echo '<div class="contactSentWrapper">
									<p class="contactSentTop">Mail Sent!</p>
									<p class="contactSent">Thank you for visiting my website.  I will respond to your message as quickly as possible!</p>
									<p class="contactSentSig">Paul Merideth</p>
								  </div>';
						}
						else
						{
							echo '<p>Mail send failed. Please try again, or use another method.</p>';
						}
						*/

						//If all fields filled out properly, clear $scrubbed so the form is not sticky
						$scrubbed=array();
						include('includes/footer.htm');
						exit;				
					}
					else //Unsafe content
					{
						echo '<p style="font-weight: bold; color: #C00">The message does not pass SPAM filters.  Please re-submit.</p>';
					}
				}
				else //Invalid Email address
				{
					echo '<p style="font-weight: bold; color: #C00">Please enter a valid Email address.</p>';
				}
			}
			else //Scrubbed data contains suspicious data
			{
				echo '<p style="font-weight: bold; color: #C00">The message fails SPAM filter or the form is incomplete. Please re-submit.</p>';
			}
		}//End of main isset if() statement
	?>

    <br/>
    <div class="divContactForm">
        <h1>Contact Form</h1>
        <br/>
        <form action="index.php?p=contact" method="post">
            <p><label for="name" class="contactName">Your Name: </label><input type="text" class="inputName" id="name" size="30" maxlength="60" value="<?php if(isset($scrubbed['name'])) echo $scrubbed['name']; ?>" /></p>
            <p><label for="email" class="contactEmail">Your Email Address: </label><input type="text" class="inputEmail" id="email" size="30" maxlength="80" value="<?php if(isset($scrubbed['email'])) echo $scrubbed['email']; ?>" /></p>
            <p><label for="comments" class="contactComments">Comments: </label><textarea class="textareaComments" id="comments" rows="5" cols="60"><?php if(isset($scrubbed['comments'])) echo $scrubbed['comments']; ?></textarea></p>
            <p><label for="submit" class="contactSubmit"></label><input type="submit" class="submitButton" id="submit" value="Submit!" /></p>
        </form>	
    </div>
</div>
