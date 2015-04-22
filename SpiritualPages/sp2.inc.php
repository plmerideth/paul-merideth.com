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
        <div id="divPara1">
			<p class="general">
				In the Fall Semester of 2014, I took a religion course at BYU Idaho on "The Family: A Proclamation to the World."  I really enjoyed the course and gained a lot of insight into the Proclamation.  I would like to share some those insights and my favorite quotes from the course.
				<br>
				The course was broken up into 6 sections, each of which I describe below.<br>To begin, I will show the Proclamation:
				<br><br>
				<img class="proclamation" src="images/Proclamation2.jpg" width="400px">
				<b>PARAGRAPH ONE</b>
			</p>
			<p class="procText">
				WE, THE FIRST PRESIDENCY and the Council of the Twelve Apostles of The Church of Jesus Christ of Latter-Day Saints, solemnly proclaim that marriage between a man and a woman is ordained of God and that the family is central to the Creator's plan for the eternal destiny of His children.
			</p>
			<p class="general">
				Paragraph one teaches eternal truths about God, His children, and the Plan of Happiness featuring marriage and family.  In connection with this paragraph and every paragraph in the Proclamation, we read a large number of talks.  One of my favorite talks on paragraph one is by Elder Tad R. Callister of the Seventy.
			</p>
			<p class="talkTitle">
				"Our Identity and Destiny"
			</p>
			<p class="talkAuthor">
				Elder Tad R. Callister, BYU Campus Education Week, 14 August 2012
			</p>
			<p class="general">
				Elder Callister makes this interesting, controversial remark in his talk:
			</p>
			<p class="talkQuote">
				“In spite of God’s altruistic aims on our behalf, perhaps no doctrine, no teaching, no philosophy has stirred such controversy as has this: that man may become a god.  It is espoused by some as blasphemous, by others as absurd.  Such a concept, they challenge, lowers God to the status of man and thus deprives God of both His dignity and divinity.  Others claim this teaching to be devoid of scriptural support.  It is but a fantasy, they say, of a young, uneducated schoolboy, Joseph Smith.  Certainly no God-fearing, right-thinking, Bible-oriented person would subscribe to such a philosophy as this.  While some of these advocates are hardened critics, other are honest and bright men who simply disagree with us on this doctrine.”
			</p>
			<p class="general">
				In his talk, Elder Callister turns to five witnesses to validate the doctrine of man's potential to become gods.  First, the scriptures; second, the witness of early Christian writers; third, the wisdom of poets and authors; fourth, the power of logic; and fifth, the voice of history.
				<br><br>
				He cites many scriptures and expounds on each.  I will list each scripture, but can’t provide all the associated commentary due to space limitations.  Here is his list, the most comprehensive list I've seen on this topic:
			</p>
				<ul>
					<li class=\’scriptureList\’>Genesis: 17:1</li>
					<li class=\’scriptureList\’>Matther 5:48</li>
					<li class=\’scriptureList\’>John 17:22-23</li>
					<li class=\’scriptureList\’>Ephesians 4:12-13</li>
					<li class=\’scriptureList\’>John 10:32-34</li>
					<li class=\’scriptureList\’>Psalm 82:6</li>
					<li class=\’scriptureList\’>Acts 17:28</li>
					<li class=\’scriptureList\’>Romans 8:16-17</li>
					<li class=\’scriptureList\’>1 Corinthians 3:21-23</li>
					<li class=\’scriptureList\’>Revelation 21:7</li>
					<li class=\’scriptureList\’>Revelation 3:21</li>
					<li class=\’scriptureList\’>Philippians 3:14</li>
					<li class=\’scriptureList\’>2 Peter 1:4</li>
					<li class=\’scriptureList\’>2 Peter 1:4</li>
					<li class=\’scriptureList\’>3 Nephi 27:27</li>
					<li class=\’scriptureList\’>1 John 3:2</li>
					<li class=\’scriptureList\’>D&C 132:20</li>
					<li class=\’scriptureList\’>D&C 76:58-60</li>
					<li class=\’scriptureList\’>Philippians 2:5-6</li>
					<li>1 Corinthians 13:1</li>
				</ul>
			<p class="general">
				This is a great talk that I really enjoyed.  If you're interested in scriptural and historical evidence of this unique LDS doctrine, I highly recommend this talk!
			</p>
		</div>
    </div>
</div>
<?php
    include('includes/spiritualSideBar.htm');
?>