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
		<div id="divPara3">
			<p class="general">
				<img class="proclamation" src="images/Proclamation2.jpg" width="400px">
				<b>PARAGRAPH THREE</b>
			</p>
			<p class="procText">
				IN THE PREMORTAL REALM, spirit sons and daughters knew and worshipped God as their Eternal Father and accepted His plan by which His children could obtain a physical body and gain earthly experience to progress toward perfection and ultimately realize their divine destiny as heirs of eternal life.  The divine plan of happiness enables family relationships to be perpetuated beyond the grave.  Sacred ordinances and covenants available in holy temples make it possible for individuals to return to the presence of God and for families to be unitied eternally.
			</p>
			<p class="general">
				Paragraph three describes God's plan which enables us to come to earth to enter into covenant ordinances with Father in Heaven so that a man and a woman and their family will be united eternally.  Elder 	Bruce C. Hafen of the Seventy explains the differences between covenant marriages and civil marriages.
			</p>
			<p class="talkTitle">
				"Covenant Marriage"
			</p>
			<p class="talkAuthor">
				Elder Bruce C. Hafen, General Conference, October 1996
			</p>
			<p class="general">
				Elder Hafen started out by observing that every marriage faces opposition at some time, and through opposition the married couple will discover if their marriage is based on a contract or covenant.  He said this:
			</p>
			<p class="talkQuote ">
				"When trouble comes, the parties to a contractual marriage seek happiness by walking away.  They marry to obtain benefits and will stay only as long as they're receiving what they bargained for.  But when troubles come to a covenant marriage, the husband and wife work them through ... Contract companions each give 50 percent; covenant companions each give 100 percent ... Marriage is by nature a covenant, not just a private contract one may cancel at will."
			</p>
			<p class="general">
				He also made this profound observation:
			</p>
			<p class="talkQuote">
				"Covenant marriage requires a total leap of faith: they must keep their covenants without knowing what risks thay may require of them.  They must surrender unconditionally, obeying God and sacrificing for each other.  Then they will discover what Alma called 'incomprehensible joy.'"
			</p>
			<p class="general">
				Elder Hafen described three kinds of wolves which test every marriage.  First is natural adversity; second, human imperfections; and third, excessive individualism.  He provided this insight about our obssession with having our own space:
			</p>
			<p class="talkQuote">
				"The adversary has long cultivated this overemphasis on personal autonomy, and now he feverishly exploits it.  Our deepest God-given instinct is to run to the arms of those who need us and sustain us.  But he drives us away from each other today with wedges of distrust and suspicion.  He exaggerates the need for having space, getting out, and being left alone.  And despite admirable exceptions, children in America's growing number of single-parent families are clearly more at risk than children in two-parent families.  Further, the rates of divorce and births outside marriage are now so high that we may be witnessing 'the collapse of marriage.'"
			</p>
		</div>
    </div>
</div>
<?php
    include('includes/spiritualSideBar.htm');
?>
