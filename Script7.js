/* Get the modals */

var facebook = document.getElementById("SMF");
var instagram = document.getElementById("SMI");
var twitter = document.getElementById("SMT");

facebook.onclick = function(event)
{
	if(facebook.onclick)
	{
		window.location.href = "https://www.facebook.com";
	}
}

instagram.onclick = function(event)
{
	if(instagram.onclick)
	{
		window.location.href = "https://www.instagram.com/accounts/login/";
	}
}

twitter.onclick = function(event)
{
	if(twitter.onclick)
	{
		window.location.href = "https://twitter.com/login?lang=en";
	}
}