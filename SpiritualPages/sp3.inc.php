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
        <div id="divPara2">
			<p class="general">
				<img class="proclamation" src="images/Proclamation2.jpg" width="400px">
				<b>PARAGRAPH TWO</b>
			</p>
			<p class="procText">
				ALL HUMAN BEINGS-male and female-are created in the image of God.  Each is a beloved spirit son or daughter of heavenly parents, and, as such, each has a divine nature and destiny.  Gender is an essential characteristic of individual premortal, mortal, and eternal identity and purpose.
			</p>
			<p class="general">
				Paragraph two teaches us that gender is essential to understanding our eternal identity, purpose, and potential.  The doctrine that our gender is an eternal quality is an important doctrine to understand. However, of the talks we read in class about paragraph two, the talk that I enjoyed most was by Elder Richard G. Scott of the Quorum of The Twelve Apostles.
			</p>
			<p class="talkTitle">
				"Finding Happiness"
			</p>
			<p class="talkAuthor">
				Elder Richard G. Scott, BYU Campus Education Week, 19 August 1997
			</p>
			<p class="general">
				In his talk, Elder Scott said that Heavenly Father sometimes employs a pattern in our lives that is described on the label of some medicines:"Shake well before using!"  I know I have sometimes felt like a bottle of Pepto Bismol being vigorously shaken before I can achieve maximum potential.  And I'm not sure why, but problems often seem to arrive in batch mode, with one problem piled on top of another and all at once.  It's at these moments "shake well before using" really applies to me.  The "shaking" effect takes hold when I stop and look at the whole of my life and count my many blessings.  Only then can I see how truly blessed I've been and with that recognition comes renewed faith and hope, which are the forces that give me the energy, determination, and inspiration to face and solve problems.  I loved Elder Scott's observation:
			</p>
			<p class="talkQuote">
				"Although it may not be a welcome insight, you will grow more rapidly through challenge and trial than from a life of ease and serenity with no disturbing elements."
			</p>
			<p class="general">
				Two other comments he made I found to be profound and truly hidden gems from the world's warped view of how to attain happiness:
			</p>
			<p class="talkQuote">
				"Your happiness is absolutely guaranteed as you willingly obey His commandments, receive all of the necessary ordinances, and are obedient to them ..."
			</p>
			<p class="general">
				and
			</p>
			<p class="talkQuote">
				"If you are one of the truly happy individuals who love your Father in heaven and are grateful for each day's blessings, reaching out to others in preference to thoughts of self, I rejoice for you.  You have found a pattern of life that will ever bring you happiness."
			</p>
		</div>        
    </div>
</div>
<?php
    include('includes/spiritualSideBar.htm');
?>