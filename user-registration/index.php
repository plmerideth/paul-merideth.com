<?php #User Registration Script - portfolio
	require('../includes-registration/config.inc.php');
	$page_title="Welcome to this Site!";
	include('../includes-registration/header.html');
    //Custom Debug code
	include('../includes-registration/myDebug.inc.php');

	echo '<h1>Welcome';
        
    //echo session_id();    
    //myShowVar("session = ", $_SESSION);
    
	if(isset($_SESSION['first_name']))
	{
		echo ", {$_SESSION['first_name']}!</h1><br/><br/>";
        echo "<p>{$_SESSION['first_name']}, you are now logged into your account.</p><br/>";
        echo "<p>You can use the menu to the right to log out or change your password.</p>";
	}
    else
    {
        echo '!</h1><br/><br/>';
        echo '<p>You can use the menu to the right to:</p>';
        echo '<ul>
                <li>Register to create a login account</li>
                <li>Log into an existing account</li>
                <li>Retrieve your password</li>
            </ul>';
    }
    
	// echo 'session.gc_maxlifetime = ' . ini_get('session.gc_maxlifetime') . '<br/>';
	// echo 'session.gc_probability = ' . ini_get('session.gc_probability');
    
    include('../includes-registration/footer.html');
?>