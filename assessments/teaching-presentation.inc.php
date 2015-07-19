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
    
    //If not logged in, redirect to home page.
    if(!isset($_SESSION['first_name']))
    {
        $url=BASE_URL . 'index.php';
        header("Location: $url");
        exit;
    }    
?>
    
<main>
    <div class="teaching">
        <h1>Teaching Presentation</h1>
        <p class="mainText">
            The following is a presentation created for CIT 230 to teach the basics of modularization using PHP.
        </p>
        <div class="divTeachingPresentation">
            <p class="mainText">INTRODUCTION</p>
            <img class="imgTeachingPresentation" src="images/teaching-1.png" alt="Image not avail">
            <p class="mainText">SLIDE 2</p>
            <img class="imgTeachingPresentation" src="images/teaching-2.png" alt="Image not avail">
            <p class="mainText">SLIDE 3</p>
            <img class="imgTeachingPresentation" src="images/teaching-3.png" alt="Image not avail">
            <p class="mainText">SLIDE 4</p>
            <img class="imgTeachingPresentation" src="images/teaching-4.png" alt="Image not avail">
            <p class="mainText">SLIDE 5</p>
            <img class="imgTeachingPresentation" src="images/teaching-5.png" alt="Image not avail">
            <p class="mainText">SLIDE 6</p>
            <img class="imgTeachingPresentation" src="images/teaching-6.png" alt="Image not avail">
            <p class="mainText">SLIDE 7</p>
            <img class="imgTeachingPresentation" src="images/teaching-7.png" alt="Image not avail">
            <p class="mainText">SLIDE 8</p>
            <img class="imgTeachingPresentation" src="images/teaching-8.png" alt="Image not avail">
            <p class="mainText">SLIDE 9</p>
            <img class="imgTeachingPresentation" src="images/teaching-9.png" alt="Image not avail">
            <p class="mainText">SLIDE 10</p>
            <img class="imgTeachingPresentation" src="images/teaching-10.png" alt="Image not avail">
            <p class="mainText">Thank you for viewing!</p>
        </div>
    </div>
</main>