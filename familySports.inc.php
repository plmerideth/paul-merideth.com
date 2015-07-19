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
    <div class="familySports">
        <h1>Family Sports Page</h1>
        <div class="divFamilySports">
            <p class="imgText">Hunter Oakes heads it in for the goal!</p>
            <img class="imgFamilySports" src="images/familysports/hunter-head-butt.jpg" alt="Image not avail">
            
            <p class="imgText">Jackson Smith dives across the goal line for the TD!</p>
            <img class="imgFamilySports" src="images/familysports/jack-the-beast.jpg" alt="Image not avail">
            
            <p class="imgText">Masey Gilbert jumps her horse Koda!</p>
            <img class="imgFamilySports" src="images/familysports/masey-jump-1.jpg" alt="Image not avail">
            
            <p class="mainText">           
                More family sports images to be added ...
            </p>
        </div>
    </div>
</main>
