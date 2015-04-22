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

<main>
    <div class="sitePlan">
        <p class="docTitle">Site Plan for paul-merideth.com</p>
        <h1>DESCRIPTION</h1>
        <h2>Site Name</h2>
        <p class="mainText">paul-merideth.com</p>
        <h2>Purpose</h2>
        <p class="mainText">
            The purpose of this site is to enable communication between myself and my family.  To share and facilitate family history, spiritual insights, travel and adventure activities, family sports and photos, and my favorite storyteller stories for my grandchildren.
        </p>
        <p class="mainText">
            The site is only accessible to family members and friends who have registered on the site and have a valid ID and password.  Once logged onto the site, users will have full access to all sections.
        </p>
        <h2>Target Audience</h2>
        <p class="mainText">
            The target audience for this website is my immediate and extended family members and close friends.  This site is not intended for general audiences or targeted towards a specific product or market.  The persona for both male and female are essentially identical, so just one persona is shown.  Scenarios are also shown following the Persona.
        </p>
        <h2>Persona</h2>
        <table class="sitePlanTable">
            <tr>
                <th scope="col">Age</th>
                <td>8+</td>
            </tr>
            <tr>
                <th scope="col">Highest Level of Education</th>
                <td>Ability to Read.  At least 3rd grade.</td>
            </tr>
            <tr>
                <th scope="col">Work Experience</th>
                <td>None Required</td>
            </tr>
            <tr>
                <th scope="col">Professional Background</th>
                <td>None Required</td>
            </tr>
            <tr>
                <th scope="col">Why will they visit the site?</th>
                <td>To view family history photos and identify unknown members and make comments.  To read about my spiritual insights and travels.  View family
                    sports photos, mostly from the youth in our family.  Parents and grandparents will read to their children from my favorite storyteller stories, with audio and images
                    audio and images.
                </td>
            </tr>
            <tr>
                <th scope="col">Where else can they get this information?</th>
                <td>This information is not available anywhere else on the internet</td>
            </tr>
            <tr>
                <th scope="col">When and where will users access the site?</th>
                <td>User will typically access the site from their home using a computer or smart phone with a web browser</td>
            </tr>
            <tr>
                <th scope="col">Technical devices used regularly?</th>
                <td>Web browser or a smart phone</td>
            </tr>
            <tr>
                <th scope="col">Software used reglarly?</th>
                <td>Microsoft Windows or Mac OS</td>
            </tr>
            <tr>
                <th scope="col">Devices used to access (primary)</th>
                <td>Web browser on a desktop, tablet, or smartphone.</td>
            </tr>
            <tr>
                <th scope="col">How much time does user spend browsing the web daily?</th>
                <td>No minimum amount of time is expected.  The only requirement is that the user has enough web experience to use a browser.</td>
            </tr>
            <tr>
                <th scope="col">What is user motivated by?</th>
                <td>The user typically will be motivated by family connections.  A natural interest will exist for viewing family photos, history, and maintaining communication.</td>
            </tr>
            <tr>
                <th scope="col">What are they looking for?</th>
                <td>Most users will be looking for photos and stories from our family genealogy, as well as my life.</td>
            </tr>
            <tr>
                <th scope="col">What is the user looking to do?</th>
                <td>Acquire information about our family or just be entertained.</td>
            </tr>
            <tr>
                <th scope="col">What are the user's needs?</th>
                <td>Simple navigation, good organization, and high quality images and audio/video.</td>
            </tr>
        </table>
        <h2>
            Scenarios
        </h2>
        <ol>
            <li>Can I do family research on this site?</li>
            <li>Where do these family pictures come from?</li>
            <li>Can I print family photos?</li>
            <li>Can I download family photos?</li>
            <li>Can I upload my own family photos?</li>
            <li>Can I contact an extended family member?</li>
            <li>What is the source of the spiritual content?</li>
            <li>Can I comment on the travel images?</li>
            <li>Can I add my own family sports pictures?</li>
            <li>Can I print the stories?</li>
            <li>How do I share the stories if I don't have audio?</li>
            <li>Can I contact other family members?</li>
            <li>Can I add my own blog style comments?</li>
            <li>What if I can't log onto the site?</li>
        </ol>
        
        <h2>Site Diagram</h2>
        <p class="mainText">The following site diagram illustrates the menu hierarchy and levels within the web site.  Each level is briefly described below.</p>
        <div class="divSiteDiagram">
            <img class="imgSiteDiagram" src="images/sitediagram.png" alt="Image not avail">
        </div>
        <h2>Home Page</h2>
        <p class="mainText">
            This is the top level default page that opens when visiting the site.  It will contain a welcome video, which will cover a variety of topics.  
            The text for this page is as follows:
        </p>
        <p class="italicText">
            Welcome to my personal website!  I created this site to allow easy, effective communication with my family and facilitate family hisotry work, 
            sharing inspirational ideas and messages, family photos, stories for my grandkids, and any other ideas I can come up with in the future.
        </p>
        <p class="italicText">
            Please view the welcome video below and let me know if you would like to see any additions or changes.
        </p>
        <p class="italicText">
            My website will be used for FAMILY HISTORY:
        </p>
        <ul>
            <li>Viewing family history photos</li>
            <li>Adding your own family history photos</li>
            <li>Reading comments or adding your own comments about family history photos</li>
            
        </ul>
        <p class="italicText">
            It will be a platform to SHARE PHOTOS, STORIES, AND SPIRITUAL/INSPIRATIONAL THOUGHTS:
        </p>
        <ul>
            <li>My favorite inspirational stories, quotes, and events</li>
            <li>My favorite places, persons, and things</li>
            <li>Family sports and activities</li>
            <li>Interactive story telling for my grandkids</li>
        </ul>
        <p class="italicText">
            To ensure security and privacy, access will eventually require a registered account.  Once completed, please follow these steps to 
            setup your account:
        </p>
        <ol>
            <li>Click on "Request Account" button below</li>
            <li>Enter your Email address</li>
            <li>Enter a password</li>
            <li>Confirm your password</li>
            <li>Reply to the confirmation Email you receive within a few days</li>
        </ol>
        <p class="italicText">
            To begin registering, please click Request Account
        </p>
        <p class="italicText">Thank you for visiting!</p>
        
        <h2>
            Menu Items
        </h2>
        <p class="mainText">
            Each menu item is described below and the features available within each section.
        </p>
        <p class="mainText">
            1.  Family History
        </p>
        <p class="mainText">
            This link opens the family history page which describes the purpose of the family history page and how to use it.  There are two sub-options
            from the top-level family history page, which are:   "View Family Photos" and "Upload Family Photo".
        </p>
        <p class="boldText">
            View Family Photos
        </p>
        <p class="mainText">
            Users can view posted pictures by clicking on the "View Family Photos" menu item.  Posted pictures are initially displayed in a row
            of 1, 4, or 9 pictures depending on the accessing device (small, med, or large screen).  Each picture will have a file name, posted
            date, and indication of any posted comments.  Clicking on a picture will bring up an enlarged view of the picture and a window showing
            existing comments, the date of the comment and the name of the author.  The user can add a new comment by clicking on a button.  The
            date and their name will automatically be added to their comment and pasted to end of the comments file.
        </p>
        <p class="boldText">
            Upload Family Photo
        </p>
        <h2>Upload Family Photo</h2>
        <p class="mainText">
            Users can post new pictures by clicking on the "Post New Photo" menu item.  New pictures can be uploaded to the website as well
            as introductory comments by the poster, but must receive admin approval before being published.  The user will be notified of a
            successful upload and pending approval.  The admin will receive an Email indicating a new picture has been posted and needs
            approval.  Once approved, the picture will be added to the posted pictures group and available for viewing.
        </p>
        <h2>
            Spiritual
        </h2>
        <p class="mainText">
            This link opens the spiritual page which describes the content and sub-sections within.  This section will be in a blog-like
            format, with posts describing things I’ve learned in scripture study or from talks from GA’s or other events that have inspired me.
        </p>
        <h2>Travels</h2>
        <p class="mainText">
            This section will contain photos and descriptions of my vacations and trips that I wish to document and share with my family.
        </p>
        <h2>Family Sports</h2>
        <p class="mainText">
            This section will contain photos of my grandkids sporting events and accomplishments.
        </p>
        <h2>Stories</h2>
        <p class="mainText">
            This section will contain a collection of stories and accompanying images and audio
            files that I can read to my grandkids to provide an interactive, audio-visual storytelling experience.
        </p>
        <h2>Asset List</h2>
        <table>
            <tr>
                <th scope="col">WEB PAGE</th>
                <th scope="col">ASSET</th>
            </tr>
            <tr>
                <td>Home</td>
                <td>Personal Image:  This will be an image of me and my fiance at the Salt Lake Temple</td>
            </tr>
            <tr>
                <td>Home</td>
                <td>Welcome Video:  This video will change from time to time and be on a topic of interest to me.</td>
            </tr>
            <tr>
                <td>Header</td>
                <td>Personal logo image in header.  No caption will be provided since this is just a logo</td>               
            </tr>
            <tr>
                <td>Footer</td>
                <td>Text image link to my personal resume web site.  I will also have a copyright image and statement</td>
            </tr>
            <tr>
                <td>Family History (1.1)</td>
                <td>
                    Background Image:  An image of my great grandfather and family.  Caption will describe my great grandfather
                    arriving into Hawaii to begin missionary work, my great grandmother at his side, and my great grandfather's's
                    brother, posing as his son so he wouldn't be sent back to Korea.
                </td>
            </tr>
            <tr>
                <td>View (1.1.1)</td>
                <td>Over 200 family history pictures.  The images will be thumbnails, which when clicked will open a larger image.</td>               
            </tr>
            <tr>
                <td>Spiritual (1.2)</td>
                <td>Image of Savior declaring His role as Messiah.  Caption will describe what the Savior is doing.</td>
            </tr>
            <tr>
                <td>Travels (1.3)</td>
                <td>Collage of some of my travel locations.  Caption will indicate the images are from India, Nigeria,
                    Paris, and Switzerland.
                </td>
            </tr>
            <tr>
                <td>Family Sports (1.4)</td>
                <td>
                    Collage image of kids playing family sports.  Caption describes each of the images in the collage, which
                    includes Jackson diving for a touchdown, Holly running on the Lacrosse field, Masey jumping her horse, and
                    Hudson scoring a goal.
                </td>
            </tr>
            <tr>
                <td>Stories (1.5)</td>
                <td>
                    A picture from the story of the Brier Possum and the Frogs.  A caption explaining that this was the first
                    story that really sparked my interest in storytelling to my grandchildren.
                </td>
            </tr>
        </table>
        <h2>Style Guide</h2>
        <p class="mainText">
            The style used within the web site will reflect my personal taste in colors, fonts, typography, and navigation.
            This is appropriate because the site is an enhanced blog and should be a reflection of my view of the world and
            my family.  I will describe the logo, color scheme for backgrounds, text, and links.  The typography will
            describe the fonts, sizes, styles, and line heights.  The navigation section will describe the behavior, appearance,
            and effects of navigation links.  Finally, I will include sketches of two pages in portrait and landscape
            orientations for three sized screens – desktop, tablet, and smartphone.
        </p>
        <h2>Logo</h2>
        <p class="mainText">The logo is my signed name in the tangerine font at a height of 60px, as shown below.</p>
        <div class="divSiteLogo">
            <img class="imgSiteLogo" src="images/logo-tangerine.jpg" alt="Image not avail">
        </div>
        <h2>Color Scheme</h2>
        <p class="mainText">The color scheme will come from a palette created on paletton.com.  The primar and secondary
            colors are as follows:
        </p>
        <div class="divSiteColors">
            <img class="imgSiteColors" src="images/color-palette.jpg" alt="Image not avail">
        </div>
        <p class="mainText">
            Colors will be used in the following manner:
        </p>
        <p class="boldText">Body Background: <span class="spanText">#AA3939</span></p>
        <p class="boldText">Body Text: <span class="spanText">#FFFFFF</span></p>
        <p class="boldText">Sidebar Background: <span class="spanText">#226666</span></p>
        <p class="boldText">Sidebar Text: <span class="spanText">#FFFFFF</span></p>
        <p class="boldText">Menu Item Background: <span class="spanText">#FFFFFF</span></p>
        <p class="boldText">Selected Menu Item Background: <span class="spanText">#789F35</span></p>
        <p class="boldText">Menu Text: <span class="spanText">#FFFFFF</span></p>
        <p class="boldText">Links Background: <span class="spanText">#FFAAAA</span></p>
        <p class="boldText">Links Text: <span class="spanText">#000000</span></p>
        <h2>Typography</h2>
        <p class="mainText">The fonts I have chosen for the website are "playfair display", "tangerine", and "Georgia".</p>
        <table>
            <tr>             
                <th scope="col">ITEM</th>
                <th scope="col">FONT</th>
                <th scope="col">SIZE</th>
                <th scope="col">COLOR</th>
            </tr>
            <tr>
                <td>Body Text</td>
                <td>Playfair Display, Georgia</td>
                <td>12px</td>
                <td>#FFFFFF</td>
            </tr>
            <tr>
                <td>Sidebar Text</td>
                <td>Playfair Display, Georgia</td>
                <td>12px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Sidebar Heading (H3)</td>
                <td>Futura</td>
                <td>18px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Menu Text</td>
                <td>Futura</td>
                <td>12px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Heading 1</td>
                <td>Futura</td>
                <td>25px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Heading 2</td>
                <td>Futura</td>
                <td>20px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Heading 3</td>
                <td>Futura</td>
                <td>18px</td>
                <td>#FFFFFF</td>                
            </tr>
            <tr>
                <td>Heading 4</td>
                <td>Futura</td>
                <td>15px</td>
                <td>#FFFFFF</td>                
            </tr>            
        </table>
        <h2>Navigation</h2>
        <p class="mainText">
            Every page will consist of a header section with the main navigation included.  The header menu bar will consist of six menu
            choices providing access to each of the main sections of the website.  Each menu item will be white text, unless it’s currently
            selected, and then it will be black text.  The menu text will use hex color #FFFFFF (white) for non-selected items and
            #000000 (black) for selected items..  The following effects will apply:
        </p>
        <p class="boldText">Hover: <span class="spanText">Menu item changes to black</span></p>
        <p class="boldText">Selected: <span class="spanText">Menu item changes to black</span></p>
        <h2>Responsiveness</h2>
        <p class="mainText">
            A responsive design will be used with three different screen size CSS formatting.  The screen sizes to be designed for are small, medium, and large.
        </p>
        <p class="boldText">Small: <span class="spanText">Max device width of 480px</span></p>
        <p class="boldText">Medium: <span class="spanText">Min device width of 481px AND Max device width of 999px</span></p>
        <p class="boldText">Large: <span class="spanText">Min device width of 1000px</span></p>
        <h2>Template Drawings for Various Screen Sizes</h2>
        <div class="divSiteTemplates">
            <img class="imgSiteTemplates" src="images/desktop-home.jpg" alt="Image not avail">
            <img class="imgSiteTemplates" src="images/desktop-fh.jpg" alt="Image not avail">
            <img class="imgSiteTemplates" src="images/ipad-home.jpg" alt="Image not avail">
            <img class="imgSiteTemplates" src="images/ipad-fh.jpg" alt="Image not avail">
            <img class="imgSiteTemplates" src="images/iphone-home.jpg" alt="Image not avail">
            <img class="imgSiteTemplates" src="images/iphone-fh.jpg" alt="Image not avail">
        </div>
     </div>
    
    
    <p>This site is under construction.  The purpose of the site is
        to allow family and friends of Paul Merideth to view, add, 
        and comment on family photos.  Access requires an account
        password.
    </p>
</main>