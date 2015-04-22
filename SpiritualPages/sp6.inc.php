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
		<div id="divPara6">
			<p class="general">
				<img class="proclamation" src="images/Proclamation2.jpg" width="400px">
				<b>PARAGRAPHS SIX & SEVEN</b>
			</p>
			<p class="procText">
				HUSBAND AND WIFE have a solemn responsibility to love and care for each other and for their children.  'Children are an heritage of the Lord' (Psalm 127:3).  Parents have a sacred duty to rear their children in love and righteousness, to provide for their physical and spriritual needs, and to teach them to love and serve one another, observe the commandments of God, and be law-abiding citizens wherever they live.  Husbands and wives - mothers and fathers - will be held accountable before God for the discharge of these obligations.
				<br><br>
				THE FAMILY is ordained of God. Marriage between man and woman is essential to His eternal plan. Children are entitled to birth within the bonds of matrimony, and to be reared by a father and a mother who honor marital vows with complete fidelity. Happiness in family life is most likely to be
				achieved when founded upon the teachings of the Lord Jesus Christ. Successful marriages and families are established and maintained on principles of faith, prayer, repentance, forgiveness, respect, love, compassion, work, and wholesome recreational activities. By divine design, fathers are to preside over their families in love and righteousness and are responsible to provide the necessities of life and protection for their families. Mothers are primarily responsible for the nurture of their children. In these sacred responsibilities, fathers and mothers are obligated to help one another as equal partners. Disability, death, or other circumstances may necessitate individual adaptation. Extended families should lend support when needed.
			</p>
			<p class="general">
				Paragraphs six and seven talk about happiness in family life.  How men and women have divinely appointed roles and are equal partners that have the responsibility to provide for their children.  One of the talks I found most interesting was given by Elder Dallin H. Oaks on the topic of <em> "Love and Law."</em>
			</p>
			<p class="talkTitle">
				"Love and Law"
			</p>
			<p class="talkAuthor">
				Elder Dallin H. Oaks, General Conference October 2009
			</p>
			<p class="general">
				Elder Oaks begins by pointing out that often we mortals get confused about love and law.  For example, a young adult in a cohabitation relationship tells grieving parents <em>"If you really loved me, you would accept me and my partner just like you accept your married children."</em>  Thereby asserting that the parent's love should override the commandments of God.  Another example would be a statement like <em>"If there was a God who loved us, He wouldn't let bad things happen to us."</em>  These attitudes reflect a belief that God's love should be so unconditional and great that He will excuse us from obeying His laws and prevent any harm from coming upon us.  Elder Oaks explains that God's laws are invariable, and in His anger and wrath are actually evidence of His perfect love for us:
			</p>
			<p class="talkQuote">
				"... those who understand God's plan for His children know that God's laws are invariable, which is another great evidence of His love for His children.  Mercy cannot rob justice, and those who obtain mercy are 'they who have kept the covenant and observed the commandment' (D&C 54:6)."
				<br><br>
				How are anger and wrath evidence of His love?  Joseph Smith taught that God <em>'instituted laws whereby the spirits that He would send into the world could have a privilege to advance like Himself.'</em>  God's love is so perfect that He lovingly requires us to obey His commandments because He knows that only through obedience to His laws can we become perfect, as He is.  For this reason, God's anger and His wrath are not a contradiction of His love but an evidence of His love.  Every parent knows that you can love a child totally and completely while still being creatively angry and disappointed at that child's self-defeating behavior."
			</p>
			<p class="general">
				He also explains D&C 130:20-21, which says:
				<br><br>
				<em>"There is a law, irrevovably decreed in heaven before the foundations of this world, upon which all blessings are predicated -
				<br>
				And when we obtain any blessing from God, it is by obedience to that law upon which it is predicated."
				</em>
				<br>
			</p>
			<p class="talkQuote">
				This great principle helps us understand the why of many things, like justice and mercy balanced by the Atonement.  It also explains why God will not forestall the exercise of agency by His children.  Agency - our power to choose - is fundamental to the gospel plan that brings us to earth.  God does not intervene to forestall the consequences of some persons' choices in order to protect the well-being of other persons - even when they kill, injure, or oppress one another - for this would destroy His plan for our eternal progress.  He will bless us to endure the consequences of others' choices, but He will not prevent those choices.'"
			</p>					
		</div>
    </div>
</div>
<?php
    include('includes/spiritualSideBar.htm');
?>