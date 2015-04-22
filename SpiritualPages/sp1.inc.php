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
        require('../includes/config.inc.php');
		//Redirect to home page
		$url=BASE_URL . 'index.php';
		header("Location: $url");
		exit;
	}
?>

<div class="mySpiritualContent">
	<div class="hello" id="hello">
    	<h1>My Favorite Spiritual and Inspirational Messages!</h1>
    </div>
    <div id="divSpiritualMainText">
		<div id="divMyConversion">
    		<p class="general">
    			To be done ...
			</p>
		</div>
    </div>
</div>
<?php
    include('includes/spiritualSideBar.htm');
?>
