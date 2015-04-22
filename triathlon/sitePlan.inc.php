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

<div class="divSitePlan">
    <div class="sitePlanContent">
        <p class="docTitle">Site Plan Page</p>
        <h1>DESCRIPTION</h1>
        <h2>Site Name</h2>
        <p class="mainText">paul-merideth.com/triathlon</p>
        <br/>
        <h2>Purpose</h2>
        <p class="mainText">
            San Quentin prison is a maximum security California state prison near San Rafael. Alcatraz Prison was a maximum-security
            federal prison, located on Alcatraz Island in San Francisco bay that closed in 1963. It has been decided that a triathlon
            between these two nefarious prisons would be a challenge for those who enjoy a challenge and attract history buffs as well.
            This particular race will be near Half Ironman, consisting of: a run of roughly 16 miles, a challenging swim of 3 miles and
            a scenic cycling course of 25 miles. The cost to enter is $100. The race will begin near San Quentin, run to Fisherman's
            wharf, swim to Alcatraz island and back and then bike around San Francisco bay, crossing the John T. Knox freeway and ending
            where the race began. This is a race between historic locales and unique in its scope. It is very important that the web
            site reflect this!
        </p>
        <br/>
        <h2>Target Audience</h2>
        <p class="mainText">
            The target audience for this website is any healthy athlete of any gender or age.
        </p>
        <br/>
        <h2>Persona: Male & Female</h2>
        <table class="sitePlanTable">
            <tr>
                <th scope="col">Age</th>
                <td>15+</td>
            </tr>
            <tr>
                <th scope="col">Education Level</th>
                <td>High School Graduate</td>
            </tr>
            <tr>
                <th scope="col">Employment</th>
                <td>White and blue collar</td>
            </tr>
            <tr>
                <th scope="col">Associations</th>
                <td>Running clubs, swimming clubs, biking clubs</td>
            </tr>
            <tr>
                <th scope="col">Why will they visit the site?</th>
                <td>To get information about the race, dates, courses, and costs.
                </td>
            </tr>
            <tr>
                <th scope="col">Where else can they get this information?</th>
                <td>The race is also advertised on popular racing websites and in San Francisco area running stores.</td>
            </tr>
            <tr>
                <th scope="col">When and where will users access the site?</th>
                <td>Users will access the site 24-hours a day, using mobile and desktop web browsers.</td>
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
                <td>The typical user is motivated by good health, and has a competitive spirit.</td>
            </tr>
            <tr>
                <th scope="col">What are they looking for?</th>
                <td>Most users will be looking for race costs and times.</td>
            </tr>
            <tr>
                <th scope="col">What is the user looking to do?</th>
                <td>Register early to avoid late fees and get a low racing number.</td>
            </tr>
            <tr>
                <th scope="col">What are the user's needs?</th>
                <td>Simple navigation, good organization, and high quality images.</td>
            </tr>
        </table>
        <br/>
        <h2>Wire Frame</h2>
        <p class="mainText">The following wire frame illustrates the home page showing how the site will look.
            <br/><br/><br/>
        <div class="divWireframe">
            <img class="imgWireframe" src="images/wire-frame.jpg" alt="Image not avail">
        </div>
        <br/><br/><br/>
        <h2>Site Page Requirements</h2>
        <p class="mainText">
            Structure all web pages appropriately to meet current design and markup standards.
        </p><br/>
        <p class="mainText">
            All structures must be identified and controlled using appropriate CSS methods.
        </p><br/>
        <p class="mainText">
            Implement appropriate header, navigation and footer sections in external documents using modularized design and construction methods.
        </p><br/>
        <p class="mainText">
            The header must clearly brand the site and requires a logo of your own design.
            The navigation must include a minimum of three basic sections of the site: Home, Registration and Route (others may be added
            as you desire) [for ideas see http://www.ironman.com/triathlon/events/americas/ironman-70.3/silverman.aspx#axzz37e5Gbl2q].
            The footer must include a copyright statement, a link to a working contact form (the form information will be sent to your email,
            but the contact page appearance should be based on the Prison to Prison Triathlon brand), and a link to the site plan, a link
            to "Resources" which is a page that credits where images or other content, not of your own creation and
            used within the site, was acquired. 
        </p><br/>
        <p class="mainText">
            All pages should adhere to the 360k limit for optimal size - edit and optimize as needed. 
        </p><br/>
        <p class="mainText">
            Each page in the site must: 
        </p><br/>
        <ul>
            <li>
                Be constructed using semantic HTML5 code
            </li>
            <li>
                Be responsive to large, medium and small screen device types
            </li>
            <li>
                Be built using a template and be modularized for common components across the site
            </li>
            <li>
                Validate to both the HTML5 and CSS3 W3C standards. 
            </li>
            <li>
                Communicate clearly with no spelling or grammar errors
            </li>
        </ul><br/><br/>
        <h2>Asset List</h2>
        <table>
            <tr>
                <th scope="col">WEB PAGE</th>
                <th scope="col">ASSET</th>
            </tr>
            <tr>
                <td>Header</td>
                <td>Custom logo for site</td>
            </tr>
            <tr>
                <td>Home</td>
                <td>Picture of Alcatraz Island</td>
            </tr>
            <tr>
                <td>Home</td>
                <td>Picture of San Quentin Prison</td>
            </tr>
            <tr>
                <td>Home</td>
                <td>Picture of Fisherman's Wharf</td>               
            </tr>
            <tr>
                <td>Home</td>
                <td>Picture of swimmer in the Bay, with Golden Gate Bridge in background</td>
            </tr>
            <tr>
                <td>Route</td>
                <td>
                    Google map of overall route
                </td>
            </tr>
            <tr>
                <td>Run Route</td>
                <td>Map of start of run route</td>               
            </tr>
            <tr>
                <td>Run Route</td>
                <td>Map of finish of run route</td>
            </tr>
            <tr>
                <td>Swim Route</td>
                <td>Map of overall swim route
                </td>
            </tr>
            <tr>
                <td>Bike Route</td>
                <td>
                    Map of overall route for bike ride
                </td>
            </tr>
            <tr>
                <td>Bike Route</td>
                <td>
                    Map of start of bike ride
                </td>
            </tr>
            <tr>
                <td>Bike Route</td>
                <td>
                    Map of finish of bike ride
                </td>
            </tr>
            <tr>
                <td>Site Plan</td>
                <td>
                    Wire frame image of website
                </td>
            </tr>
        </table>
        <br/>
        <h2>Style Guide</h2>
        <p class="mainText">
            The style used within the web site will reflect the beauty of San Francisco as well as a feel for two infamous prisons in colors,
            fonts, typography, and navigation.  I will describe the logo, color scheme for backgrounds, text, and links.  The typography will
            describe the fonts, sizes, styles, and line heights.  The navigation section will describe the behavior, appearance,
            and effects of navigation links.
        </p>
        <br/>
        <h2>Logo</h2>
        <p class="mainText">The logo is a runner, swimmer, and cyclist racing thru a barbed-wired fence, as shown below.</p>
        <br/><br/>
        <div class="divSiteLogo">
            <img class="imgSiteLogo" src="images/logo-3.png" alt="Image not avail">
        </div>
        <br/><br/>
        <h2>Color Scheme</h2>
        <p class="mainText">The color scheme is based on black iron bars and worn bricks.
        </p>
        <p class="mainText">
            Colors will be used in the following manner:
        </p>
        <p class="boldText">Body Background: <span class="spanText">Prison cell bars background image</span></p>
        <p class="boldText">Body Text: <span class="spanText">#000</span></p>
        <p class="boldText">Sidebar Background: <span class="spanText">Prison cell bars background image</span></p>
        <p class="boldText">Sidebar Text: <span class="spanText">#000</span></p>
        <p class="boldText">Menu Item Background: <span class="spanText">No Background</span></p>
        <p class="boldText">Selected Menu Item Background: <span class="spanText">#FF0000</span></p>
        <p class="boldText">Menu Text: <span class="spanText">#000</span></p>
        <p class="boldText">Links Background: <span class="spanText">No Background</span></p>
        <p class="boldText">Links Text: <span class="spanText">#000</span></p>
        <br/>
        <h2>Typography</h2>
        <p class="mainText">The fonts I have chosen for the website are "serif" and "armalite rifleregular".</p>
        <table>
            <tr>             
                <th scope="col">ITEM</th>
                <th scope="col">FONT</th>
                <th scope="col">SIZE</th>
                <th scope="col">COLOR</th>
            </tr>
            <tr>
                <td>Body Text</td>
                <td>serif</td>
                <td>25px</td>
                <td>#000</td>
            </tr>
            <tr>
                <td>Sidebar Text</td>
                <td>serif</td>
                <td>25px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>Menu Text</td>
                <td>serif</td>
                <td>25px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>H1</td>
                <td>serif</td>
                <td>50px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>H2</td>
                <td>serif</td>
                <td>40px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>H3</td>
                <td>serif</td>
                <td>30px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>H4</td>
                <td>serif</td>
                <td>25px</td>
                <td>#000</td>                
            </tr>
            <tr>
                <td>Header Title</td>
                <td>Armature Rifleregular</td>
                <td>95px</td>
                <td>#000</td>                
            </tr>
        </table>
        <br/>
        <h2>Navigation</h2>
        <p class="mainText">
            Every page will consist of a header and left sidebar sections with the main navigation included in the left sidebar.
            The header will contain the logo and the title of the event.  The left sidebar will have three menu choices providing
            access to each of the main sections of the website.  Each menu item will be black text, unless it’s currently
            selected, and then it will be red text.  The menu text will use hex color #000 (black) for non-selected items and
            #FF0000 (red) for selected items..  The following effects will apply:
        </p>
        <p class="boldText">Hover: <span class="spanText">Menu item changes to red</span></p>
        <p class="boldText">Selected: <span class="spanText">Menu item changes to red</span></p>
        <br/>
        <h2>Responsiveness</h2>
        <p class="mainText">
            A responsive design will be used with three different screen size CSS formatting.  The screen sizes to be designed for are small, medium, and large.
        </p>
        <br/>
        <p class="mainText">Small: <span class="spanText">Max device width of 480px</span></p>
        <p class="mainText">Medium: <span class="spanText">Min device width of 481px AND Max device width of 999px</span></p>
        <p class="mainText">Large: <span class="spanText">Min device width of 1000px</span></p>
    </div>
</div>