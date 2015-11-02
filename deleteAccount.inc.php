<?php
    require('includes/config.inc.php');	    
    include('includes/header.htm');

	//Redirect user if not logged in
	if(!isset($_SESSION['user_id']) && $_POST['submit']!="Delete Account")
	{
        print_r($_POST);
		$url=BASE_URL . 'index.php';
        echo 'URL = ' . $url;
		//ob_end_clean();
		//header("Location: $url");
		exit();
	}
    
    if(isset($_POST['sure']))
    {
        if($_POST['sure']=="Yes")
        {
            require(MYSQL);
            $q = "DELETE FROM users
                  WHERE user_id={$_SESSION['user_id']}";
            $r = @mysqli_query($dbc, $q);
            if(mysqli_affected_rows($dbc)== 1)
            {
                echo '<h3>Your account has been deleted.</h3>';
              	mysqli_close($dbc);				
        
                //Delete session and login
        		$_SESSION = array(); //Wipe out session data
            	session_destroy(); //Destroy session
                setcookie(session_name(), '', time()-3600); //Delete session cookie (named by calling session_name())
                        
                //Redirect back to deleteAccount page to show logged out status
                //$url=BASE_URL . 'deleteAccount.inc.php';
                //header("Location: $url");
                exit;        
            }
        }
        else
        {
            echo '<h3>Your account has NOT been deleted.';
            exit;
        }            
    }
?>  

<h1 class="registerForm">Are you sure you want to delete this account?</h1>
    
<form action="deleteAccount.inc.php" method="post">
    <fieldset class="fieldsetLogin">
        <div align="center">
            <input type="radio" name="sure" value="Yes"/> Yes
            <input type="radio" name="sure" value="No" checked="checked"/> No
            <br/>
            <input type="submit" class="submitButton" name="submit" value="Submit"/>
        </div>
    </fieldset>
</form>    
    
<?php
    include('includes/footer.htm');
?>