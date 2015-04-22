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
?>

<main>
    <div class="stories">
        <h1>Stories Page</h1>
        <p class="mainText">
            Stories to be added ... in the mean time enjoy this Eagles song!
        </p>
        <div class="divStoriesAudio">
            <audio class="storiesAudio" controls>
                <source src="audio/oneofthesenights.mp3" type="audio/mp3">
            </audio>
        </div>
    </div>
</main>
