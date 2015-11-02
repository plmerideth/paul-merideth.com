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
    
    //If not logged in, redirect to home page.
    if(!isset($_SESSION['first_name']))
    {        
        $url=BASE_URL . 'index.php';
        header("Location: $url");
        exit;
    }

	//Check for form submission
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
        if(isset($_POST['story']))
        {
            require(MYSQL);
            $uID=$_SESSION['user_id'];
            $body = nl2br($_POST['story']); //Convert line breaks to <br/>
            $body = htmlentities($_POST['story'], ENT_QUOTES, 'UTF-8');
            
            if(!empty($_POST['story']))
            {
                $q="INSERT INTO stories (userID, date, story)
                    VALUES ('$uID', NOW(), '$body')";
                $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                mysqli_close($dbc);
                
        		$url=BASE_URL . 'index.php?p=stories';
                header("Location: $url");
                exit;                
            }
            else
            {
                echo '<p class="error">ERROR:  No text was entered!</p>';
            }
        }
    }
    ?>    

<!-- Begin HTML form -->
<h1 class="registerForm">Write a story below:</h1>
<form action="index.php?p=addStory" method="post">
	<fieldset class="StoriesFieldsetLogin">        
        <textarea name="story" class="storyText"></textarea>	
        <div align="center"><input type="submit" class="submitLogin" name="submit" value="Submit"/></div>
	</fieldset>
</form>