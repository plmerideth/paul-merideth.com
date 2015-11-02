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

    if(isset($_POST['submit']))
    {
        if(isset($_POST['storyID']))
        {            
            require(MYSQL);            
            
            $q = "DELETE FROM stories
                  WHERE storyID={$_POST['storyID']}";

            $r = @mysqli_query($dbc, $q);
            //print_r($r);
            //exit;
            if(mysqli_affected_rows($dbc)== 1)
            {
                echo '<h3>Your story, number ' . $_POST['storyID'] . ', has been deleted.</h3>';
              	mysqli_close($dbc);				
                                
                exit;        
            }                                    
        }
    }    
?>
    
<main>    
    <!-- Begin HTML form -->
    <h1 class="registerForm">Select Story to Delete:</h1>
    <form action="index.php?p=deleteStory" method="post">
        <fieldset class="fieldsetLogin">        
                <label for="storyID" class="formLabels"><b>Story ID:</b></label>
                <input type="text" name="storyID" size="20" maxlength="40"/>        
            <div align="center"><input type="submit" class="submitLogin" name="submit" value="Submit"/></div>
        </fieldset>
    </form>
    
    <br/><br/>
    <div class="stories">
        <?php
            if($_SESSION['user_level']==2)
            {                                    
                //Retrieve stories from database
                require(MYSQL);
                $q="SELECT storyID, userID,
                    DATE_FORMAT(date, '%M %D, %Y') AS addDate, story
                    FROM stories
                    WHERE userID={$_SESSION['user_id']}
                    ORDER BY date ASC";    

                $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

                if($r) //If query ran OK, display stories
                {        
                    //Table header
                    echo '<div class=divStoriesDeleteTable>';
                    echo '<table>
                         <tr><td class="storyID">Story ID</td>
                         <td class="name">Name</td>
                         <td class="date">Date Recorded</td>
                         <td class="story">Story</td></tr>';

                    //Fetch all stories
                    while( $row=mysqli_fetch_array($r, MYSQLI_ASSOC))
                    {
                        echo '<tr>'
                             . '<td>' . $row['storyID']
                             . '</td><td>' . $_SESSION['first_name'] . " " . $_SESSION['last_name']
                             . '</td><td>' . $row['addDate']
                             . '</td><td class=storyTD>' . $row['story']
                             . '</td></tr>';
                    }

                    echo '</table>'; //Close the table
                    echo '</div>';        
                    mysqli_free_result($r);                				

                }
                else //Query failed
                {        
                    echo '<p class="error">Sorry, but the system is unable to retrieve stories from the database.  Please report this error to the web site administrator
                          at admin@paul-merideth.com.</p>';        
                }

                mysqli_close($dbc);
            }

            /*  NEVER GETS CALLED
            //Check for form submission
            if($_SERVER['REQUEST_METHOD']=='POST')
            {        
                if(isset($_POST['submit']))
                {
                    require(MYSQL);
                    $uID=$_SESSION['user_id'];
                    //$body = nl2br($_POST['story']); //Convert line breaks to <br/>
                    $body = htmlentities($_POST['story'], ENT_QUOTES, 'UTF-8');

                    if(!empty($_POST['storyID']))
                    {
                        /* $q="INSERT INTO stories (userID, date, story)
                            VALUES ('$uID', NOW(), '$body')";
                        $r=mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));
                        */
            /*
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
             */
        ?>    
    </div>
</main>