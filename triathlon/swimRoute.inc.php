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

	if(isset($_GET['f']))
    {
		$param=$_GET['f'];
		//echo '<p>Param = ' . $param . '</p>';
	}
?>

<div class="divSwimRoute">
    <div class="divSwimMaps">
        <br/>
        <br/>
        <br/>
        <h1>Maps for the swim route</h1>
        <img class="imgRouteMap" src="images/run-swim-overview.jpg" alt="Image not avail">
        <p class="routeText">Part 1 - Run-swim route</p>
    </div>
</div>



<div class="divSwimRoute">

</div>

