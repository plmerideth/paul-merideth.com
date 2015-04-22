<?php # index.php for paul-merideth.info
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
		case 'familyHistory':
			$page='familyHistory.inc.php';
			$page_title="Paul Merideth-Family History";
		break;
		case 'spiritual':
			$page='spiritual.inc.php';
			$page_title="Paul Merideth-Spiritual";
		break;
        case 'sp1':
            $page='SpiritualPages/sp1.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp2':
            $page='SpiritualPages/sp2.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp3':
            $page='SpiritualPages/sp3.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp4':
            $page='SpiritualPages/sp4.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp5':
            $page='SpiritualPages/sp5.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp6':
            $page='SpiritualPages/sp6.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
        case 'sp7':
            $page='SpiritualPages/sp7.inc.php';
            $page_title="Paul Merideth-Spiritual";
        break;
		case 'travel':
			$page='travel.inc.php';
			$page_title="Paul Merideth-Travel";
		break;
		case 'familySports':
			$page='familySports.inc.php';
			$page_title="Paul Merideth-Family Sports";
		break;
		case 'stories':
			$page='stories.inc.php';
			$page_title="Paul Merideth-Stories";
		break;
        case 'teaching':
            $page='assessments/teaching-presentation.inc.php';
            $page_title="Paul Merideth-Teaching Presentation";
        break;
        case 'sitePlan':
            $page='assessments/site-plan.inc.php';
            $page_title="Paul Merideth-Site Plan";
        break;
		default:
			$page='main.inc.php';
			$page_title="Paul Merideth-Home";
		break;
	}

	//Make sure file exists, or set default to main.inc.php
	if(!file_exists($page))
	{
        // echo '<p>The page</p>' . $page . '<p>does not exist</p>';
		$page='main.inc.php';
		$page_title="Paul Merideth-Home";
	}

	include('includes/header.htm');
	include($page);
	include('includes/footer.htm');
?>