/* Projects JS */
/* Get the modals */

var WEBC1 = document.getElementById("WEBC1");
var WEBC2 = document.getElementById("WEBC2");
var WEBC3 = document.getElementById("WEBC3");
var WEBC4 = document.getElementById("WEBC4");

/* Get the prefecture modals */
var mp01 = document.getElementById("mp01");
var mp02 = document.getElementById("mp02");
var mp03 = document.getElementById("mp03");
var mp04 = document.getElementById("mp04");
var mp05 = document.getElementById("mp05");
var mp06 = document.getElementById("mp06");
var mp07 = document.getElementById("mp07");
var mp08 = document.getElementById("mp08");

var p1 = document.getElementById("prefecture01");
var p2 = document.getElementById("prefecture02");
var p3 = document.getElementById("prefecture03");
var p4 = document.getElementById("prefecture04");
var p5 = document.getElementById("prefecture05");
var p6 = document.getElementById("prefecture06");
var p7 = document.getElementById("prefecture07");
var p8 = document.getElementById("prefecture08");

var bg = document.getElementById("bg01");


p1.onclick = function(event)
{
	if(p1.onclick)
	{
		mp01.style.display = "block";

	}
}
p2.onclick = function(event)
{
	if(p2.onclick)
	{
		mp02.style.display = "block";
	}
}
p3.onclick = function(event)
{
	if(p3.onclick)
	{
		mp03.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}
p4.onclick = function(event)
{
	if(p4.onclick)
	{
		mp04.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}
p5.onclick = function(event)
{
	if(p5.onclick)
	{
		mp05.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}
p6.onclick = function(event)
{
	if(p6.onclick)
	{
		mp06.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}
p7.onclick = function(event)
{
	if(p7.onclick)
	{
		mp07.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}
p8.onclick = function(event)
{
	if(p8.onclick)
	{
		mp08.style.display = "block";
		//bg.style.filter = "blur(8px)";
	}
}

/* PROJECTS CONTAINERS */
WEBC1.onclick = function(event)
{
	if(WEBC1.onclick)
	{
		window.location.href = 'WebC1.html';
	}
}

WEBC2.onclick = function(event)
{
	if(WEBC2.onclick)
	{
		window.location.href = 'WebC2.html';
	}
}

WEBC3.onclick = function(event)
{
	if(WEBC2.onclick)
	{
		window.location.href = 'WebC3.html';
	}
}

WEBC4.onclick = function(event)
{
	if(WEBC4.onclick)
	{
		window.location.href = 'WebC4.html';
	}
}


var register = document.getElementById("reg01");
var main = document.getElementById("prefecture00");
var span = document.getElementById("span01");

register.addEventListener("click", function()
{
	main.style.display = "none";
	
	span.addEventListener("click", function()
	{
		main.style.display = "block";
	});

});