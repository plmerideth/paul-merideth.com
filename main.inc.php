<?php #main.inc.php file.  The content portion of the Home page.

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
?>

		<div class="myContent">
			<div class="myImage">
                <!--  Commented out to reduce initial data to load.
				<img class="paulImage" src="images/Paul-Barb.png" alt="Image not avail">			
                -->
			</div>
			<div class='hello'>
                <?php
                    if(isset($_SESSION['first_name']))
                    {
                        echo "<h1>Hello, {$_SESSION['first_name']}!</h1><br/><br/>";
                        echo "<p class='mainText'>{$_SESSION['first_name']}, you are now logged into your account.</p><br/>";
                    }
                    else
                    {
                        echo "<h1>Hello Family and Friends!</h1>";
                        echo '<h2>Please log in or register as a new user if you do not have an account</h2>';
                    }
                ?>
			</div>
			<p class="mainText">
				Welcome to my website!  I decided to create a platform to communicate and share the important and fun stuff from life with family and friends.  So I
				created this website and selected categories that I hope will be of interest and value to the most important people in my life. I will try very hard to
				make it <strong>EASY</strong> to use and provide content with <strong>VALUE</strong> and of <strong>INTEREST</strong>.
			</p>
            <div class="divWelcomeVideo">
                <p class="mainText">Please enjoy this interesting video about social media!</p>
                <video class="welcomeVideo" controls>
                    <source src="video/socialmedia.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video> 
                <!--
                <audio controls>
                    <source src="audio/nyminute.mp3" type="audio/mp3">
                </audio>
                -->
            </div>            
			<p class="mainText">My website will be used for <strong>FAMILY HISTORY:</strong></p>
			<ul>
				<li class="listText">Viewing family history photos</li>
				<li class="listText">Adding your own family history photos</li>
				<li class="listText">Reading comments or add your own comments about family history photos</li>
			</ul>
			
			<p class="mainText">It will be a platform to <strong>SHARE PHOTOS, STORIES, AND SPIRITUAL/INSPIRATIONAL THOUGHTS:</strong></p>
			<ul>
				<li class="listText">My favorite inspirational stories, quotes, and events</li>
				<li class="listText">My favorite places, persons, and things</li>
				<li class="listText">Family sports and activities</li>
				<li class="listText">Interactive story telling for my grand kids</li>
			</ul>

			<p class="mainText">
				To ensure security and privacy, access will eventually require a registered account.  Once completed, please follow these
				steps to setup your account:
			</p>
			<ol>
				<li class="listText">Click on "Request Account" Button Below</li>
				<li class="listText">Enter your Email Address</li>
				<li class="listText">Enter a password</li>
				<li class="listText">Confirm your password</li>
				<li class="listText">Reply to the confirmation Email you will receive from me within a few days</li>
			</ol>

			<span class="mainSpan">To begin registering, please click</span>
            <a href="index.php?p=registration" title="Registration Page"
                   class=<?php echo ($page_title=="Registration Page") ? 'registrationPage' : 'otherPage';?>>Registration</a>
            
			<!--<a href="" title="Account Registration Not Activated Yet!"><strong>Request Account</strong></a> -->

			<p class="mainText">Thank you for visiting!</p>
		</div>

		<div class="sidebarHome">
			<div class="FamilyNews">
				<h3>Family History News</h3>
                <ul>
					<li>Just completed work for my class.  Updates coming soon!</li>
				</ul>
			</div>
			<div class="SpiritualNews">
				<h3>Spritual News</h3>
                <ul>
                    <li>Report on "The Family: A Proclamation to the World" added.</li>
				</ul>
			</div>
			<div class="TravelNews">
				<h3>Travel News</h3>
				<ul>
					<li>Updates coming.</li>
				</ul>
			</div>
			<div class="SportsNews">
				<h3>Family Sports News</h3>
				<ul>
					<li>Photos coming soon.</li>
				</ul>
			</div>
			<div class="StoryNews">
				<h3>Stories News</h3>
				<ul>
                    <li>Enjoy an Eagles song until stories are added.</li>
				</ul>
			</div>
		</div>