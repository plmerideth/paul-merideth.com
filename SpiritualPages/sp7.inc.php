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
		<div id="divPara8">
			<p class="general">
				<img class="proclamation" src="images/Proclamation2.jpg" width="400px">
				<b>PARAGRAPHS EIGHT & NINE</b>
			</p>
			<p class="procText">
				WE WARN that individuals who violate covenants of chastity, who abuse spouse or offspring, or who fail to fulfill family responsibilities will one day stand accountable before God. Further, we warn that the disintegration of the family will bring upon individuals, communities, and nations the calamities foretold by ancient and modern prophets.
				<br><br>
				WE CALL UPON responsible citizens and officers of government everywhere to promote those measures designed to maintain and strengthen the family as the fundamental unit of society.
			</p>
			<p class="general">
				Paragraphs eight and nine contain warnings and instructions about creating, maintaining, and strenthening our families and how we must work to preserve the family as the fundamental unit of society.
				<br><br>
				Elder Oaks gave an amazing talk called <em>'Religious Freedom'</em> about the Constitution, human rights, and how they relate to religious and civil freedoms.  He starts by relating the amazing true story of a 42-year old, married woman in Mongolia who was a department head in the state library and exhibited extraordinary courage in the face of an oppressive communist government.  Her fight for the freedoms of worship, belief and expression included a 5-day hunger strike, which led to a national anti-government movement for basic human freedoms of speech, press, and religion.  Several years later, progress had been made toward a free society, which opened the doors for the Church to send missionaries.  A year after the missionaries first arrived in Mongolia, she was baptized and two years after that, her son was baptized.  He later was called as Mongolia's first Stake President.
				<br><br>
				Elder Oaks extensive knowledge of our legal system is amazing and his years working as a clerk to the US Supreme Court and as a Justice on the Utah Supreme Court are evident in the insights and wisdom he offers in this talk.
				<br><br>
				The connection between sovereignty in the people and D&C 101:78 became very clear when he said:
			</p>
			<p class="talkQuote"> 
				"This principle of sovereignty in the people explains the meaning of God's revelation that He established the Constitution of the United States "that every man may act ... according to the moral agency which I have given unto him, that every man may be accountable for his own sins in the day of judgment."  In other words, the most desirable condition for the effective exercise of God-given moral agency is a condition of maximum freedom and responsibility - the opposite of slavery or political oppression."
			</p>
			<p class="general">
					This explains very clearly why Heavenly Father's plan of happiness is so dependent on religious freedom and why the Lord took such an active role in establishing the U.S. Constitution.  He also makes it very clear why we need to elect honest political leaders when he said:
				</p>
			<p class="talkQuote"> 
				"The inherent conflict between the precious religious freedom of the people and the legitimate regulatory responsibilities of the government is the central issue of religious freedom."
			</p>
			<p class="general">
				I appreciated that Elder Oaks identified the two greatest threats to our religious freedoms today: 
			</p>
			<ol>
				<li>The rising strength of those who seek to silence religious voices in public debates</li>
				<li>Perceived conflicts between religious freedom and the popular appeal of newly alleged civil rights</li>
			</ol>
			<p class="general">
				Finally, Elder Oaks offered us 5 points of counsel on how LDS should conduct themselves on issues of religious freedom.  I found this to be very practical, applicable counsel:
			</p>
			<ul>
				<li>Speak with love, always showing patience, understanding and compassion toward our adversaries</li>
				<li>Do not be deterred or coerced into silence</li>
				<li>Insist on our freedom to preach the doctrines of our faith</li>
				<li>Be wise in our political participation by exercising our civil rights legally and wisely</li>
				<li>Never support the idea that a person must subscribe to a specific set of religious beliefs to qualify for public office</li>
			</ul>
			<p class="general">
				This talk is my favorite talk on this topic.  Elder Oaks is able to express concepts and ideas about complex topics very clearly and concisely.  I'm definitely saving this one in my "favorites" files.
			</p>					
		</div>				
	</div>
</div>

<?php
    include('includes/spiritualSideBar.htm');
?>