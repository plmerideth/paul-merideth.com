<?php
    require('includes/config.inc.php');	    
    include('includes/header.htm');

	//Redirect user if not logged in
	if(!isset($_SESSION['user_id']) && $_POST['submit']!="Submit")
	{
        print_r($_POST);
		$url=BASE_URL . 'index.php';
        echo 'URL = ' . $url;
		//ob_end_clean();
		//header("Location: $url");
		exit();
	}    
    
    if(isset($_POST['submit']))
    {                
        if(isset($_POST['storyID']))  //Submit button from editStory.inc.php with storyID number
        {
            require(MYSQL);
            $q="SELECT story
                FROM stories
                WHERE storyID = {$_POST['storyID']}
                AND userID={$_SESSION['user_id']}";

            $r=mysqli_query($dbc, $q);
            $stories=mysqli_fetch_array($r, MYSQLI_ASSOC);

            if($stories) //Story found
            {
                $_POST['oldStory'] = $stories['story'];
                $_SESSION['storyID']=$_POST['storyID']; //Save story ID in global
            }
            else
            {
                echo 'NO STORIES FOUND';
            }

            mysqli_close($dbc);
        }
        if(isset($_POST['story'])) //Submit button with story update.
        {
            require(MYSQL);           
            
            $body = nl2br($_POST['story']); //Convert line breaks to <br/>
            $body = htmlentities($_POST['story'], ENT_QUOTES, 'UTF-8');                                 
            
            $q="UPDATE stories
                SET story='$body'
                WHERE storyID={$_SESSION['storyID']}";                                             
                
            $r=mysqli_query($dbc, $q);
                        
            if(mysqli_affected_rows(($dbc))==1)
            {
                echo "Story Updated!";
            }
            else
            {
                echo '<p class="error">ERROR:  No changes, nothing updated.</p>';
            }
            
            mysqli_close($dbc);
            exit;                
        }
    }    
?>


<!-- Begin HTML form -->
<h1 class="registerForm">Edit your story below:</h1>
<form action="editStory2.inc.php" method="post">
	<fieldset class="fieldsetLogin">        
        <textarea name="story" class="storyText"><?php echo $_POST['oldStory']?></textarea>	
        <div align="center"><input type="submit" class="submitLogin" name="submit" value="Submit Story"/></div>
	</fieldset>
</form>

<?php
    include('includes/footer.htm');
?>