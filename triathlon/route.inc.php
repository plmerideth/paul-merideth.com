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

<div class="divRoute">      
    <div class="divRouteMap">
        <br/>
        <br/>
        <h1>Route Overview</h1>
        <br/>
        <p class="routeText">
            The race begins with a 16-mile beginning at San Quentin State Prison, in the parking lot of the Post Office.
            You will follow the markers, crossing the John T. Knox freeway, and ending the run at Fisherman's Wharf in San Francisco.
        </p>
        <br/>
        <p class="routeText">
            From Fisherman's Wharf, you will swim 3 miles, out and around Alcatraz Island.
        </p>
        <br/>
        <p class="routeText">
            The final leg will be a 25-mile bike ride back to San Quentin State Prison.  Your return route will vary from the running route, to
            add the extra mileage.  When you leave Fisherman's Wharf, follow Post street until you reach Union.  Turn right on Union and follow
            it to the Embarcadero Highway.  Stay on the Embardero Highway to Highway 101 across the Golden Gate Bridge and to San Quentin.
        </p>
        <br/>
        <h2>Click a link below for detailed maps</h2>

        <nav class="myNav2">
            <ul class="myNav2Menu">
                <li><a href="index.php?p=runRoute" title="Prison to Prison Run Route"
                       class=<?php echo ($page_title=="Prison to Prison Run Route") ? 'routeRunPage' : 'otherPage';?>>Run Route</a>
                </li>
                <li><a href="index.php?p=swimRoute" title="Prison to Prison Swim Route"
                   class=<?php echo ($page_title=="Prison to Prison Swim Route") ? 'routeSwimPage' : 'otherPage';?>>Swim Route</a>
                </li>
                <li><a href="index.php?p=bikeRoute" title="Prison to Prison Bike Route"
                   class=<?php echo ($page_title=="Prison to Prison Bike Route") ? 'routeBikePage' : 'otherPage';?>>Bike Route</a>            
                </li>
            </ul>
        </nav>
        <img class="imgRouteMap" src="images/run-overview-2.jpg" alt="Image not avail">
             <p class="routeText">Part 1 - Running route</p>
        <br/>
        <br/>
        <div id="map-canvas">
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions=
                {
                  center: new google.maps.LatLng(37.8267, -122.4233),
                  zoom: 12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
              }
              google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </div>
        <p class="routeText">Google Map</p>
    </div>
</div>
