<?php 
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width = device-width, initial-scale = 1">
<style>
body
{
	font-family: Arial;
	margin: 0;
}
*
{
	box-sizing: border-box;
}
							/* The Background Image */
								/* The image used */
.bg-img
{

	background-image: url("755470.jpg");
	min-height: 640px;
	height: 977px;
	width: 1880px;
	min-width: 480px;
	
	/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-color: #cccccc;
	position: relative;
	margin: 0;
	filter: blur(0px);
}
img
{
	vertical-align: middle;
}
h1   
{
	font-family: Lucida Sans;
	font-size: 25px;
	color: #d8ebf0;
	margin: 0px;
}
.text
{
	font-size: 18px;
	color: white;
	position: absolute;
	padding: 8px 12px;
	width: 100%;
	text-align: center;
	bottom: 8px;
	font-family: Lucida Sans;
}
.text-page
{
	font-size: 18px;
	color: Black;
	position: relative;
	padding: 4px 6px;
	text-align: center;
	font-family: Lucida Sans;
}
.text-bg-img
{
	font-size: 18px;
	color: black;
	position: relative;
	width: 100%;
	text-align: center;
	font-family: Lucida Sans;
}

/* On smaller screen, decrease text size */ 
@media only screen and (max-width: 300px)
{
	.text{font-size: 11px}
}
										/* Button group */
.btn-groupHolder 
{
	width: 200px;
	height: 400px;
	top: 20%;
	left: 0px;
	position: absolute;
}
										/* Buttons */ 	
.button1 
{
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 150px;
	height: 50px;
	position: relative;
	background-image: url("307582.jpg");
	background-size: cover;
	border: 2px solid #000000;
	border-radius: 4px;
	margin: 4px;
	transition-duration: 0.4s;
	color: black;

}									
									
.button1:hover  			/* how to make a hovering effect button */ 
{
	color: white;
	border: 2px solid white;
	background-image: url("307582.jpg");
	background-position: center;
}					
.button2 
{
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 150px; 
	height: 50px;
	position: relative;
	background-image: url("307582.jpg");
	background-size: cover;
	color: black;
	border: 2px solid #000000;
	border-radius: 4px;
	margin: 4px;
	transition-duration: 0.4s;
}
.button2:hover
{
	color: white;
	border: 2px solid white;
	background-image: url("307582.jpg");
	background-position: center;
}
.button3 
{
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 150px;
	height: 50px;
	position: relative;
	background-image: url("307582.jpg");
	background-size: cover;
	color: black;
	border: 2px solid #000000;
	border-radius: 4px;
	margin: 4px;
	transition-duration: 0.4s;
}
.button3:hover
{
	color: white;
	border: 2px solid white;
	background-image: url("307582.jpg");
	background-position: center;
}
.button4 
{
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 150px;
	height: 50px;
	position: relative;
	background-image: url("307582.jpg");
	background-size: cover;
	color: black;
	border: 2px solid #000000;
	border-radius: 4px;
	margin: 4px;
	transition-duration: 0.4s;
}
#button41 
{
	float: right;
}
.button4:hover
{
	color: white;
	border: 2px solid white;
	background-position: center;
	background-image: url("307582.jpg");
}
.button5
{
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 150px;
	height: 50px;
	position: relative;
	background-image: url("7307582.jpg");
	background-size: cover;
	color: black;
	border: 2px solid #000000;
	border-radius: 8px;
	margin: 4px;
	transition-duration: 0.4s;
}	
.button5:hover
{
	color: white;
	border: 2px solid white;
	background-position: center;
	backgroun-image: url("307582.jpg");
}						
.container
{
	position: absolute;
	right: 0;
	margin: 20px;
	max-width: 300px;
	padding: 16px;
	background-color: white;
	opacity: 0.5;
}
.container:hover
{
	opacity: 1;
}
								/* Full-width input fields */
input[type = text], input[type = password]
{
	width: 100%;
	padding: 15px;
	margin: 8px 0; 
	border: 1px solid #ccc;
	display: inline-block;
	box-sizing: border-box;
} 
input[type = email]
{
	width: 100%;
	padding: 15px;
	margin: 8px 0;
	border: 1px solid #ccc;
	display: inline-block;
	box-sizing: border-box;
}
input[type = comment]
{
	width: 100%;
	padding: 15px;
	margin: 8px;
	border: 1px solid #ccc;
	display: inline-block;
	box-sizing: border-box;
	word-break: break-all;
}
							/* Extra styles for the cancel button */
.cancelbtn
{
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}
.imgcontainer
{
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
}
img.avatar
{
	width: 50%;
	border-radius: 60%;
}
.modal-container
{
	padding: 16px;
}
span.psw
{
	float: right;
	padding-top: 16px;
}
								/* The Modal (background) */
.modal 
{
	display: none; 							/* Hidden by default */
	position: fixed; 						/* Stay in place */
	z-index: 2; 							/* Sit on top */
	left: 0;
	top: 0;
	width: 100%; 							/* Full width */
	height: 100%; 							/* Full height */
	overflow: auto; 						/* Enable scroll if needed */
	background-color: rgb(0,0,0); 			/* Fallback color */
	background-color: rgba(0,0,0,0.4); 		/* Black w/ opacity */
	padding-top: 60px;
}
								/* Modal Content/box */
.modal-content
{
	background-color: #fefefe;
	margin: 5% auto 15% auto;	/* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 500px;
	height: 720px;;
	position: absolute;
	top: 2%;
	left: 35%;
	z-index: 2;

}
/* The close button (x) */ 
.close
{
	position: absolute;
	right: 25px;
	top: 0;
	color: #0847bf;
	font-size: 25px;
	font-weight: bold;
}
.close:hover,
.close:focus
{
	color: red;
	cursor: pointer;
}
/* Add zoom animation */
.animate
{
	-webkit-animation: animatezoom 0.6s;
	animation: animatezoom 0.6s
}
@-webkit-keyframes animezoom
{
	from {-webkit-transform: scale(0)}
	to{-webkit-transform: scale(1)}
}
@keyframes animezoom
{
	from {transform: scale(0)}
	to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px)
{
	span.psw
	{
		display: block;
		float: none;
	}
	.cancelbtn
	{
		width: 100%;
	}
}
							/* Title */
.title-container
{
	position: absolute;
	width: 100%;
	height: 125px;
	border: none;
	top: 0%;
	margin: 0px;
}
.title-icon
{
	position: absolute;
	left: 50%;
	top: 0%;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	margin: 0px;
}
.title-icon:hover
{
	margin: 2px solid black;
}
.title-text
{
	font-family: Lucida Sans;
	position: realtive;
	color: black;
	padding: 8px 12px;
	left: 50%;
	
}
.title-weather
{
	position: absolute;
	left: 40%;
	top: 5%;
	width: 100px;
	height: 100px;
	background-position: center;
	background-size: cover;
	background-repeat: none;
	margin: 0px;
	cursor: pointer;
}
.title-anime
{
	position: absolute;
	left: 30%;
	top: 0%;
	width: 200px;
	height: 100px;
	background-position: center;
	background-size: cover;
	background-repeat: none;
	margin: 0px;
	cursor: pointer;
}
.title-news
{
	position: absolute;
	left: 60%;
	top: 0%;
	width: 200px;
	height: 100px;
	background-position: center;
	background-size: cover;
	background-repeat: none;
	margin: 0px;
	cursor: pointer;
}
.title-touristAttractions
{
	position: absolute;
	left: 70%;
	top: 0%;
	width: 200px;
	height: 100px;
	background-position: center;
	background-size: cover;
	background-repeat: none;
	margin: 0px;
	cursor: pointer;
}
							/* Website Picture Block */
.Web-container
{
	position: fixed;
	display: none;
	width: 270px;
	height: 770px;
	background-color: black;
	opacity: 0.8;
	border: none;
	top: 15%;
	top: 15%;
	right: 1%;
}
.Web-container:hover
{
	opacity: 1;
}

								/* Website Main Container */
.WebC-container1
{
	position: absolute;
	display: block;
	width: 250px;
	height: 150px;
	background-image: url("89317.png");
	background-position: center;
	background-repeat: none;
	background-size: cover; /* ensures the entire pic is displayed */
	left: 10px;
	top: 35px;
	border: 1px solid #008f1b;
	cursor: pointer;
}
.WebC-container2
{
	position: absolute;
	display: block;
	width: 250px;
	height: 150px;
	background-image: url("541326.jpg");
	background-position: center;
	background-repeat: none;
	background-size: cover;
	border: 1px solid #ffffff;
	left: 10px;
	top: 220px;
	cursor: pointer;
}
.WebC-container3
{
	position: absolute;
	display: block;
	width: 250px;
	height: 150px;
	background-image: url("peter-nguyen-OpiZAxueRUE-unsplash.jpg");
	background-position: center;
	background-repeat: none;
	background-size: cover;
	border: 1px solid #4696b1;
	left: 10px;
	top: 415px;
	cursor: pointer;
}
.WebC-container4
{
	position: absolute;
	display: block;
	width: 250px;
	height: 150px;
	background-image: url("patricia-jekki-y14Jxn_agCA-unsplash.jpg");
	background-position: center;
	background-repeat: none;
	background-size: cover;
	border: 1px solid #6e850f;
	left: 10px;
	top: 610px;
	cursor: pointer;
}
.splash
{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background: #f6c088;
	height: 100%;
	z-index: 200;
	color: white;
	text-align: center;
	line-height: 90vh;
}
.splash.display-none
{
	position: fixed;
	opacity : 0;
	top: 0;
	left: 0;
	width: 1880px;
	height: 977px;
	background: black;
	z-index: -10; 	/* Makes it fall behind everything else */
	color: white;
	text-align: center;
	transition: all 0.5s;
}
@keyframes fadeIn
{
	to
	{
		opacity: 1;
	}
}
.fade-in
{
	opacity: 0;
	z-index: -11;
	animation: fadeIn 1s ease-in forwards;
}
.error
{
	color: #FF0000;
}
.prefectures
{
	display: block;
	position: absolute;
	width: 1070px;
	height: 600px;
	opacity: 0.9;
	background-color: rgb(0,0,0);
	background-color: rgba(0,0,0,0.4);
	top: 25%;
	left: 20%;
	filter: blur(0px);
	z-index: 1;
}
.prefecture-Hokkaido
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Hokkaido.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 5px;
	left: 25px;
	text-align: center;
	font-size: 50px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;

}
.prefecture-Hokkaido:hover
{
	border: 1px solid white;
}

.prefecture-Tohoku
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Tohoku.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 5px;
	left: 380px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;	
}
.prefecture-Tohoku:hover
{
	border: 1px solid white;
}
.prefecture-Kanto
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Kanto.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 5px;
	left: 735px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;
}
.prefecture-Kanto:hover
{
	border: 1px solid white;
}
.prefecture-Chubu
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Chubu.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 185px;
	left: 25px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;
}
.prefecture-Chubu:hover
{
	border: 1px solid white;
}
.prefecture-Kansai
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Kansei.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 185px;
	left: 380px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;
}
.prefecture-Kansai:hover
{
	border: 1px solid white;
}
.prefecture-Chugoku
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Chugoku.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 185px;
	left: 735px;
	border-radius: 8px;
	cursor: pointer;	
	border: 1px solid black;
}
.prefecture-Chugoku:hover
{
	border: 1px solid white;
}
.prefecture-Shikoku
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Shikoku.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 365px;
	left: 25px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;
}
.prefecture-Shikoku:hover
{
	border: 1px solid white;
}
.prefecture-Kyushu-Okinawa
{
	display: block;
	position: absolute;
	width: 300px;
	height: 150px;
	opacity: 1;
	background-image: url("Kyushu-Okinawa.jpg");
	background-position: center;
	background-size: cover;
	background-color: black;
	top: 365px;
	left: 380px;
	border-radius: 8px;
	cursor: pointer;
	border: 1px solid black;
}
.prefecture-Kyushu-Okinawa:hover
{
	border: 1px solid white;
}
.modal-prefecture 
{
	display: none; 							/* Hidden by default */
	position: fixed; 						/* Stay in place */
	z-index: 1; 							/* Sit on top */
	left: 0;
	top: 0;
	width: 100%; 							/* Full width */
	height: 100%; 							/* Full height */
	overflow: auto; 						/* Enable scroll if needed */
	background-color: rgb(0,0,0); 			/* Fallback color */
	background-color: rgba(0,0,0,0.4); 		/* Black w/ opacity */
	padding-top: 60px;
}
.modal-content-prefecture
{
	background-color: #465155;
	margin: 5% auto 15% auto;	/* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 500px;
	height: 720px;;
	position: absolute;
	top: 2%;
	left: 35%;
	opacity: 0.9;
}
.img-container-prefecture
{
	width: 100%;
	position: relative;
	padding: 8px 30px;
}

.text-prefecture
{
	font-size: 15px;
	color: white;
	position: relative;
	padding: 4px 30px;
	text-align: left;
	font-family: Lucida Sans;
}
</style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $pswErr = "";
$name = $email = $gender = $comment = $psw = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameErr = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{		
			$nameErr = "Only letters and white spaces allowed";
		}
	}
	if(empty($_POST["email"]))
	{
		$emailErr = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
		}
	}
	if(empty($_POST["gender"]))
	{
		$genderErr = "Gender is required";
	}
	else
	{
		$gender = test_input($_POST["gender"]);
	}
	if(empty($_POST["comment"]))
	{
		$commentErr = "";
	}
	else
	{
		$comment = test_input($_POST["comment"]);
	}
	if(empty($_POST["psw"]))
	{
		$pswErr = "";
	}
	else
	{
		$psw = test_input($_POST["psw"]);
	}
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
	<div class = "fade-in"></div>
	<div class = "splash">
		<img class = "fade-in" src = "Simple.gif"></img>
	</div>
			
		<div class = "bg-img" id = "bg01">

			<div class = "title-container">
			<!---
				<div class = "title-icon">
					<img src = "icons/icons8-japan-100.png"></img>
					<div class = "title-text">Welcome!</div>
				</div>
				
				<div class = "title-anime">
					<img src = "icons/output-onlinepngtools.png"></img>
				</div>
				
				<div class = "title-news">
					<img src = "icons/icons8-news-100.png"></img>
				</div>
				
				<div class = "title-touristAttractions">
					<img src = "icons/icons8-theme-park-100.png"></img>
				</div>
				
				<div class = "title-weather">
					<img src = "icons/icons8-rain-100.png"></img>
				</div>
			--->	
			</div>	
			
			<div class = "btn-groupHolder">
			
				<button class = "button1"
				onclick = "window.location.href = 'Website%20Slideshow.html';">SlideShow
				</button>
				
				<button class = "button2"
				onclick = "window.location.href = 'https://youtu.be/7nLCC_LtFOs';">Videos
				</button>
				
				<button class = "button3" id = "btnWeb">Projects</button>
				
				<button class = "button4" id = "reg01" 
				onclick = "document.getElementById('id01').style.display = 'block'">Register!
				</button>

			</div>
			
			<div id = "id01" class = "modal">
				<form class = "modal-content animate" action = "submit.php" method = "post">
					<div class = "imgcontainer">
						<span id = "span01" onclick = "document.getElementById('id01').style.display = 'none'" 
						class = "close" title = "Close Modal" >&times;
						</span>
						<img src = "Simple.gif" alt = "Avatar" class = "avatar">
					</div>	
					
					<div class = "modal-container">
						<p><span class = "error">* required field </span></p>
						
						<span class = "error">* <?php echo $nameErr;?></span>
						<label for = "uname"><b>Username</b></label>
						<input type = "text" placeholder = "Enter Username" name = "name" required>
						
						<span class = "error">* <?php echo $nameErr;?></span>
						<label for = "psw"><b>Password</b></label>
						<input type = "password" placeholder = "Enter A Password" name = "psw" required>
						
						<span class = "error">*<?php echo $emailErr;?></span>
						<label for = "email"><b>Email</b></label>
						<input type = "email" placeholder = "Enter Email" name = "email" required>
						
						<label for = "comment"><b>Comment</b></label>
						<input type = "comment" placeholder = "Short Motivation(not required)" name = "comment">
						<button class = "button3" type = "submit">Submit</button>
						<button class = "button4" id = "button41" onclick = "window.location.href = 'Login.html';">Login</button>
						</br>
						<label>
							<input type = "checkbox" checked = "checked" name = "remember"> Remember Me</input>
						</label>
					</div>		
				</form>
			</div>
			
			<!---
			<div class = "socialM-container">
				<div class = "socialM-facebook" id = "SMF"></div>
				<div class = "socialM-Instergram" id = "SMI"></div>
				<div class = "socialM-Twitter" id = "SMT"></div>
			</div>
			--->
		</div>
		
	<div class = "Web-container" id = "WebC">
		<span onclick = "document.getElementById('WebC').style.display = 'none'" 
		class = "close" title = "Close Modal">&times;
		</span>
		<div class = "WebC-container1" id = "WEBC1"></div>
		<div class = "WebC-container2" id = "WEBC2"></div>
		<div class = "WebC-container3" id = "WEBC3"></div>
		<div class = "WebC-container4" id = "WEBC4"></div>
	</div>
	
	<div class = "prefectures" id = "prefecture00">
		<div class = "prefecture-Hokkaido" id = "prefecture01"><div class = "text">Hokkaido</div></div>
		<div class = "prefecture-Tohoku" id = "prefecture02"><div class = "text">Tohoku</div></div>
		<div class = "prefecture-Kanto" id = "prefecture03"><div class = "text">Kanto</div></div>
		<div class = "prefecture-Chubu" id = "prefecture04"><div class = "text">Chubu</div></div>
		<div class = "prefecture-Kansai" id = "prefecture05"><div class = "text">Kansai</div></div>
		<div class = "prefecture-Chugoku" id = "prefecture06"><div class = "text">Chugoku</div></div>
		<div class = "prefecture-Shikoku" id = "prefecture07"><div class = "text">Shikoku</div></div>
		<div class = "prefecture-Kyushu-Okinawa" id = "prefecture08"><div class = "text">Kyushu-Okinawa</div></div>
	</div>
	
	<div class = "modal-prefecture" id = "mp01">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp01').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Hokkaido.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			<b>Hokkaido</b> has a different feel from the rest of Japan. <br>
			The weather is cooler with less humidity in the summer and the region escapes the earlier monsoon.<br> 
			Winters are cold and long, stretching from November to March, 
			but are ideal for winter sports such as skiing and snowboarding, 
			the celebrated snow festival (Yuki Matsuri) in Sapporo and the frozen 
			northern seas off the coast of Wakkanai and the islands of Rebun and Rishiri.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp02">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp02').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Tohoku.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			The Tohoku region consists of the north east part of the main island of Honshu.<br>
			Tohoku includes the six prefectures of Aomori, Akita, Iwate, Yamagata, Miyagi and Fukushima.<br>
			The Tohoku area has from historical times been one of the relatively less developed parts of Japan.<br>
			Tohoku was historically occupied by the Emishi, before they were defeated by the Yamato during the 
			Nara and Heian periods and driven north into Hokkaido or subjugated where they were.<br>
			The region is marked by long and severe winter weather with cooler and more pleasant 
			temperatures in summer.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp03">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp03').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Kanto.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			The Kanto region is located in the north central region of the main island of Honshu.<br>
			The area includes the seven prefectures of Chiba, Gunma, Ibaraki, Kanagawa, Saitama, Tochigi and Tokyo.
			<br>Chiba, Kanagawa and Tokyo have access to the Pacific Coast; the other prefectures are landlocked.
			The area has a slightly more temperate climate than Kansai and Kyushu to the south.<br> 
			The weather in the greater Tokyo area is generally cooler and less humid than Osaka and Kyoto in summer. 
			<br>Winters can be cold but snow in Tokyo is a rare occurrence.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp04">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp04').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Chubu.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			The Chubu region has very different climates and landscapes.<br> The weather on the Japan Sea 
			coast is cooler than the baking southern Pacific coast around Nagoya in summer with heavy snow 
			along the north coast in winter.<br>Winter sports such as skiing and snowboarding are possible in 
			Nagano, Niigata and Gifu, three prefectures whose mountains make up the majestic Japan Alps.<br>
			The Winter Olympics were successfully held in Nagano in 1998 and the prefecture is a favorite 
			with skiers and snow-boarders, who flock to resorts such as Hakuba.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp05">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp05').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Kansei.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			Kansai, also known as the Kinki region is located in the south central region of the main island 
			of Honshu, about 400 km (250 miles) west of the Kanto region.<br>
			The Kansai region includes both the Japan Sea and Pacific Ocean coastal areas and the seven prefectures 
			of Hyogo, Kyoto, Mie, Nara, Osaka, Shiga and Wakayama.<br>
			The Kansai area has very different climates and landscapes. The weather on the Japan Sea coast is 
			cooler than the hot southern Pacific coast around Osaka and Kyoto in summer with heavy snow along 
			the north coast in winter.<br> The Kii Peninsula (Wakayama, Nara, Osaka and Mie Prefectures) south east of 
			Osaka has higher mountains, onsen and lower temperatures in summer than the urban areas.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp06">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp06').style.display = 'none'" class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Chugoku.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			The Chugoku region consists of the south west part of Honshu Island.<br> An alternative name for the 
			region is the San-in San'yo Chiho (山陰山陽地方).
			Chugoku includes five prefectures: Okayama Prefecture, Shimane Prefecture, Hiroshima Prefecture, 
			Tottori Prefecture and Yamaguchi Prefecture.<br>
			Chugoku is heavily industrialized along its Pacific Coast but much more rural in its mountainous 
			interior and along the Sea of Japan Coast.<br>
			The weather in the region is similar to that in Kansai and Kanto with heavy snowfall in the 
			winters along the Sea of Japan Coast and hot and humid days in summer.
			</div>
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp07">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp07').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Shikoku.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			Shikoku is probably the least visited of Japan's main islands, but this tranquil region has 
			much to offer. <br>Highlights are the 88 Sacred Temples pilgrimage following in the footsteps of 
			the Buddhist priest Kobo Daishi, the castles in Kochi and Matsuyama, the Awa Odori street dance 
			in Tokushima, the 1346 steps of the Kompira-san shrine and the mountains of the Iya Valley and 
			the Oboke Gorge
			</div>
			
		</div>
	</div>
	
	<div class = "modal-prefecture" id = "mp08">
		<div class = "modal-content-prefecture animate">
			<span onclick = "document.getElementById('mp08').style.display = 'none'" 
			class = "close" title = "Close Modal">&times;</span>
			<br><br>
			<img src = "Kyushu-Okinawa.jpg" alt = "Avatar" class = "img-container-prefecture"></img>
			<div class = "text-prefecture">
			-Kyushu is the most southerly of Japan's main islands.<br>
			-Okinawa is part of a chain of sub-tropical islands (Nansei Shoto).<br>
			-Kyushu known for its volcanoes and onsen.<br>
			-evidence of early civilization found in Kyushu.<br>
			-marine sports heaven on the beaches of Okinawa.<br>
			-population of Kyushu around 15 million; Okinawa 1.3 million.<br>
			-traditional Ryukyu culture still survives in music, food and dress on Okinawa<br>
			-many popular, bizarre and spectacular festivals throughout the year.
			</div>
		</div>
	</div>
	
	<script src = "Script1.js"></script>
	<script src = "Script2.js"></script>
	<script src = "Script4.js"></script>
	<script src = "Script6.js"></script>
	<!---
	<script src = "Script7.js"></script>
	--->
	<script src = "Website-container.js"></script>
	<script src = "Splash-screen.js"></script>
	<script src ="My Website.js"></script>
</body>
</html>