var priorID="";
window.addEventListener('load', init, false);

function init()
{
	document.getElementById('topicMyConversion').addEventListener('click', topicMyConversion, false);
	document.getElementById('topicFDREL200P1').addEventListener('click', topicFDREL200P1, false);
	document.getElementById('topicFDREL200P2').addEventListener('click', topicFDREL200P2, false);
	document.getElementById('topicFDREL200P3').addEventListener('click', topicFDREL200P3, false);
	document.getElementById('topicFDREL200P4').addEventListener('click', topicFDREL200P4, false);
	document.getElementById('topicFDREL200P6').addEventListener('click', topicFDREL200P6, false);
	document.getElementById('topicFDREL200P8').addEventListener('click', topicFDREL200P8, false);

	hideAll(); //Hide all divs
	document.getElementById('divChrist').setAttribute('style', 'display:block');	//Show pic of Christ
}
function topicMyConversion()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

    hideAll(); //Hide all divs before displaying current div
	document.getElementById('divMyConversion').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);


	var myString = "My conversion story ... TBD";			
	document.getElementById('spiritualMainText').innerHTML = myString;
}

function topicFDREL200P1()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

	hideAll(); //Hide all divs before displaying current div
	document.getElementById('divPara1').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}
function topicFDREL200P2()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

	hideAll(); //Hide all divs before displaying current div
	document.getElementById('divPara2').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}
function topicFDREL200P3()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

    hideAll(); //Hide all divs before displaying current div
	document.getElementById('divPara3').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}
function topicFDREL200P4()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

    hideAll();
	document.getElementById('divPara4').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}
function topicFDREL200P6()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

	hideAll();
	document.getElementById('divPara6').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}
function topicFDREL200P8()
{
	if(priorID!="") //If an image was previously selected, remove the "selectedImg" class.
	{
		document.getElementById(priorID).className="topicButton";				
	}
	priorID=this.id;
	document.getElementById(this.id).className="selectedTopic";

	hideAll();
	document.getElementById('divPara8').setAttribute('style', 'display:block');
	document.getElementById('hello').scrollIntoView();
	window.scrollTo(0,0);
}

function hideAll()
{
	document.getElementById('divChrist').setAttribute('style', 'display:none');
	document.getElementById('divMyConversion').setAttribute('style', 'display:none');
	document.getElementById('divPara1').setAttribute('style', 'display:none');
	document.getElementById('divPara2').setAttribute('style', 'display:none');
	document.getElementById('divPara3').setAttribute('style', 'display:none');
	document.getElementById('divPara4').setAttribute('style', 'display:none');
	document.getElementById('divPara6').setAttribute('style', 'display:none');
	document.getElementById('divPara8').setAttribute('style', 'display:none');
}