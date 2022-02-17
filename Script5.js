/* Fetch the Container-text */
var Ct1 = document.getElementById("id00");
var Ct2 = document.getElementById("id01");
var Ct3 = document.getElementById("id02");

/* Fetch the Container */
var c1 = document.getElementById("c01");
var c2 = document.getElementById("c02");
var c3 = document.getElementById("c03");

/* Fetch the buttons */ 
var button1 = document.getElementById("bt01");
var button2 = document.getElementById("bt02");
var button3 = document.getElementById("bt03");

button1.onclick = function(event)
{
	if(button1.onclick)
	{
		Ct1.style.display = "block";
		c1.style.display = "block";
	}
}

button2.onclick = function(event)
{
	if(button2.onclick)
	{
		Ct2.style.display = "block";
		c2.style.display = "block";
	}
}

button3.onclick = function(event)
{
	if(button3.onclick)
	{
		Ct3.style.display = "block";
		c3.style.display = "block";
	}
}







