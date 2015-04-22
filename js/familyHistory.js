var panel=1;
var priorID="";
var parentDiv="", imgElement="";

window.addEventListener('load', init, false);

function init()
{
	for(var i=1; i<=9; i++)
	{
        var myString="";
		myString="pic"+i+".png";
        if(document.getElementById(myString))
            document.getElementById(myString).addEventListener('click', showComment, false);
        else
            break;
	}
}

function showComment()
{
	//Change class of image in the familyHistoryBar so selected image is highlighted
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedImg";
	var elemImg = document.getElementById(this.id);
	var elemDiv = document.getElementById('enlargedPic');
    
    var mq1=window.matchMedia("all and (min-width: 481px) and (max-width: 999px)");
    mq1.addListener(mediaQueryResponse);
    
    if(mq1.matches) //Media is medium sized screen
    {
        //Set height of div proportional to reduction in width
        var newHeight = ((500/750)*elemImg.naturalHeight) + 120; //naturalHeight is the height in pixels or org image.
    }
    else
    {
        var newHeight = elemImg.naturalHeight + 120; //naturalHeight is the height in pixels or org image.        
    }
	
	newHeight = "height:" + newHeight.toString() + "px";
	//Increase div containing image to same height as image, plus 120 pixels.
	document.getElementById('enlargedPic').setAttribute("style", newHeight);
		
	document.getElementById('sidebarFamily').setAttribute("style", "height:200px"); //Temporarily set height to 200px.  Needs to match length of comments
	var tempString = this.src; //Get the full path and filename of selected image.
	var myIndex = tempString.lastIndexOf('/');  //strip out just the filename.
	var myString = "This is a comment for " + tempString.slice(myIndex+1);
	document.getElementById('outputComment').innerHTML = myString;
	//Create img element to display large pic
	parentDiv=document.getElementById('enlargedPic');

    if(imgElement)
	{
		parentDiv.removeChild(imgElement);
	}	
   	imgElement = document.createElement('img');
    //priorImg = imgElement;
    
    if(mq1.matches)
    {
        imgElement.style.width='500px';
    }
    else
    {
        imgElement.style.width='750px';
    }
	
	imgElement.src=this.src;
	parentDiv.appendChild(imgElement);
}

function mediaQueryResponse()
{
	var elemImg = document.getElementById(priorID);
	var elemDiv = document.getElementById('enlargedPic');

    var mq1=window.matchMedia("all and (min-width: 481px) and (max-width: 999px)");
    
    if(mq1.matches) //Media is medium sized screen
    {
        //Set height of div proportional to reduction in width
        var newHeight = ((500/750)*elemImg.naturalHeight) + 120; //naturalHeight is the height in pixels or org image.
    }
    else
    {
        var newHeight = elemImg.naturalHeight + 120; //naturalHeight is the height in pixels or org image.        
    }
    
    newHeight = "height:" + newHeight.toString() + "px";
	//Increase div containing image to same height as image, plus 120 pixels.
	document.getElementById('enlargedPic').setAttribute("style", newHeight);
		
	document.getElementById('sidebarFamily').setAttribute("style", "height:200px"); //Temporarily set height to 200px.  Needs to match length of comments
	// var tempString = priorID; //Get the full path and filename of selected image.
	//var myIndex = tempString.lastIndexOf('/');  //strip out just the filename.
	//var myString = "This is a comment for " + tempString.slice(myIndex+1);
    var myString = "This is a comment for " + priorID;
	document.getElementById('outputComment').innerHTML = myString;
	//Create img element to display large pic
	parentDiv=document.getElementById('enlargedPic');

    // Replace priorImg with imgElement
    if(imgElement)
	{
		parentDiv.removeChild(imgElement);
	}	
   	// imgElement = document.createElement('img');
    
    if(mq1.matches)
    {
        imgElement.style.width='500px';
    }
    else
    {
        imgElement.style.width='750px';
    }
	
    
	//imgElement.src=priorImg.src;
    //priorImg=imgElement;
    
	parentDiv.appendChild(imgElement);
}


function moreButton()
{
}