<?php # index.php for paul-merideth.com/triathlon
		/* This is the main page.
		 * It includes the config.inc.php file, the templates,
		 * and any content-specific modules.
		 * This is the "bootstrap" file.  All activity routes thru this file.
		 * It is the only file that is ever loaded in the web browser.
		 */

	require('includes/config.inc.php');	

/* Determine which page to show.
	 * 'p' is passed as a parameter in the URL from <a> links in header.htm.
	 */
	if(isset($_GET['p'])) //Use GET in <a> link
	{
		$p=$_GET['p'];
	}
	elseif(isset($_POST['p'])) //Search form uses POST
	{
		$p=$_POST['p'];
	}
	else
	{
		$p=NULL;
	}

	switch($p)
	{
		case 'route':
			$page='route.inc.php';
			$page_title="Prison to Prison Route";
		break;
		case 'registration':
			$page='registration.inc.php';
			$page_title="Prison to Prison Registration";
		break;
        case 'runRoute':
			$page='runRoute.inc.php';
			$page_title="Prison to Prison Run Route";
		break;
        case 'swimRoute':
			$page='swimRoute.inc.php';
			$page_title="Prison to Prison Swim Route";
		break;
        case 'bikeRoute':
			$page='bikeRoute.inc.php';
			$page_title="Prison to Prison Bike Route";
		break;
        case 'contact':
			$page='contact.inc.php';
			$page_title="Prison to Prison Contact";
		break;
        case 'sitePlan':
			$page='sitePlan.inc.php';
			$page_title="Prison to Prison Site Plan";
		break;
        case 'resources':
			$page='resources.inc.php';
			$page_title="Prison to Prison Resources";
		break;
        case 'thankYou':
			$page='thankYou.inc.php';
			$page_title="Prison to Prison Thank You!";
		break;
		default:
			$page='main.inc.php';
			$page_title="Prison to Prison Home";
		break;
	}

	//Make sure file exists, or set default to main.inc.php
	if(!file_exists($page))
	{
        echo '<p>The page</p>' . $page . '<p>does not exist</p>';
		$page='main.inc.php';
		$page_title="Prison to Prison -Home";
	}

	include('includes/header.htm');
	include($page);
	include('includes/footer.htm');
?>
