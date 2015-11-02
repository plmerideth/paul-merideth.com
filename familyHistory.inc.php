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
    
    //If not logged in, redirect to home page.
    if(!isset($_SESSION['first_name']))
    {
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

<div class="familyHistoryContent">
	<div class="familyHistoryBar">
		<?php
    		//echo '<p>Param = ' . $param . '</p>';
			switch ($param)
			{
				case '1':
					$iStart=1;
					$iEnd=9;
				break;
				case '2':
					$iStart=10;
					$iEnd=18;
				break;
				case '3':
					$iStart=19;
					$iEnd=27;
				break;
				case '4':
					$iStart=28;
					$iEnd=36;
				break;
				case '5':
					$iStart=37;
					$iEnd=45;
				break;
				case '6':
					$iStart=46;
					$iEnd=54;
				break;
				case '7':
					$iStart=55;
					$iEnd=63;
				break;
				default:
					$iStart=1;
					$iEnd=9;
					$param=0;
				break;
			}
	
            if($param!='x') //If $param==x, then show link to load thumbnails
            {                                     
                for($i=$iStart, $j=1; $i<=$iEnd; $i++, $j++)
                {
                    $image="pic" . $i . ".png";
                    $id="pic" . $j . ".png";                                        
                    
                    //echo '<a href="index.php?p=familyHistory&amp;f=' . 'a"> <img src=familyImages/' . $image . ' id=' . $id . '></a>'; // width=\"80px\"
                    echo "<img src=\"familyImages/$image\" id=\"$id\">"; // width=\"80px\"
                }
            }
            else
            {
                echo '<a href="index.php?p=familyHistory&amp;f=1" id="loadThumbnails" title="Click to load thumbnail images" class="loadThumbnails">Click Here to Load Thumbnails</a>';
            }
    	?>
	</div>
</div>
<div class='picCount'>
    <?php
        if($param!='x')
            echo 'Pictures ' . $iStart . ' thru ' . $iEnd;
    ?>
</div>
    
<div class="myButtonMore">
    <?php
        if($param>1)
        {
            if($param==7)
            {
                echo '<a id="idMoreButton" href="index.php?p=familyHistory&amp;f=' . '1">' . 'Next' . '</a>';
                echo '<a id="idBackButton" href="index.php?p=familyHistory&amp;f=' . ($param-1) . '">' . 'Back' . '</a>';	
            }
            else
            {
                echo '<a id="idMoreButton" href="index.php?p=familyHistory&amp;f=' . ($param+1) . '">' . 'Next' . '</a>';
                echo '<a id="idBackButton" href="index.php?p=familyHistory&amp;f=' . ($param-1) . '">' . 'Back' . '</a>';	
            }
        }
        else if($param==1)
        {
            echo '<a id="idMoreButton" href="index.php?p=familyHistory&amp;f=' . ($param+1) . '">' . 'Next' . '</a>';
            echo '<a id="idBackButton" href="index.php?p=familyHistory&amp;f=' . '7">' . 'Back' . '</a>';	
        }		
    ?>
</div>

<?php
    if($param!='x')
    {
        echo '<div id="sidebarFamily" class="sidebarFamily">';
        echo '<h3>Comments</h3>';
        echo '<div id="outputId"><p id="outputComment" class="outputComment"></p></div>';
        echo '</div>';
    }
?>
		
<div id="enlargedPic" class='familyHistoryPics'>
    <h2>Click on Thumbnail For Large Image</h2>
</div>

<script src="js/familyHistory.js"></script>