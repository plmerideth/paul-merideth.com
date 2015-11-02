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
?>    

<main>
    <div class="stories">
    <h1>Stories Page</h1>
        <?php
            if($_SESSION['user_level']==2)
            {
                echo '<div class="storyLeft">
                        <form class="storyForm1" action="index.php?p=addStory" method="post">
                        
                        <fieldset class="storyButtonsLeft">                        
                        <div class="divButton" align="center"><input type="submit" class="submitLogin" name="submitAdd" value="Add A Story"/></div>
                        </fieldset>
                        </form>
                    </div>
                    
                    <div class="storyMiddle">
                        <form class="storyForm2" action="index.php?p=editStory" method="post">
                        <fieldset class="storyButtonsMiddle">
                        <div class="divButton" align="center"><input type="submit" class="submitLogin" name="submitEdit" value="Edit Story"/></div>                        
                        </fieldset>
                        </form>
                    </div>
                        
                    <div class="storyRight">
                        <form class="storyForm2" action="index.php?p=deleteStory" method="post">
                        <fieldset class="storyButtonsRight">
                        <div class="divButton" align="center"><input type="submit" class="submitLogin" name="submitDelete" value="Delete Story"/></div>                        
                        </fieldset>
                        </form>
                    </div>
                        <div class="clearMyDivs"></div>';                  
            }
                        
            //Retrieve stories from database
            require(MYSQL);
            $q="SELECT storyID, userID,
                DATE_FORMAT(date, '%M %D, %Y') AS addDate, story
                FROM stories ORDER BY date ASC";

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
                    //Get first and last name of author of story from users DB
                    $q="SELECT first_name, last_name
                        FROM users
                        WHERE user_id = " . $row['userID'];
            
                    $r2=mysqli_query($dbc, $q);
                    $users=mysqli_fetch_array($r2, MYSQLI_ASSOC);
                                                
                    echo '<tr>'
                         . '<td>' . "   " . $row['storyID']
                         . '</td><td>' . " " . $users['first_name'] . " " . $users['last_name']
                         . '</td><td>' . " " . $row['addDate']
                         . '</td><td class=storyTD>' . " " . nl2br($row['story'])
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
        ?>
    </div>
</main>
