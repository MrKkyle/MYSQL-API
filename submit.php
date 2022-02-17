<?php 
session_start(); 
?>
<head>
<style>

body
{
	margin: 0px;
}
.modal1
{
	display: block;
	position: fixed;
	z-index: 1;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgb(0,0,0);
	background-color: rgba(0,0,0,0.4);
	padding-top: 60px;
}
.modal-content
{
	background-color: #fefefe;
	margin: 5% auto 15% auto;	/* 5% from the top, 15% from the bottom and centered */
	border: 1px solid #888;
	width: 35%;
	padding: 10px;
	position: relative;
	top: 10%;
}


/* The close button (x) */ 
.close
{
	position: absolute;
	right: 25px;
	top: 0;
	color: #000;
	font-size: 35px;
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

.cancelbtn
{
	width: auto;
	padding: 10px 18px;
	background-color: #f44336;
}

.imgcontainer
{
	background-color: url("594713.jpg");
	margin: 24px 0 12px 0;
	position: relative;
	left: 50%;
}

img.avatar
{
	position: relative;
	left: 25%;
	text-align: center;
	width: 55%;
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

.omega-container
{
	margin: 0px;
	height: 100%;
	position: absolute;
	width: 100%;
}

/* The image used */
.bg-img
{

	background-image: url("ji-seongkwang-htMMBc71Hjc-unsplash.jpg");
	min-height: 480px;
	height: 977px;
	width: 1880px;
	min-width: 480px;
	
	/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-color: #cccccc;
	position: relative;
	margin: 0px;

}

.text
{
	font-size: 18px;
	color: black;
	position: relative;
	padding: 4px 6px;
	text-align: Center;
	font-family: Lucida Sans;
	
}

.button3 
{
	padding: 15px 23px;
	text-align: center;
	text-decoration: none;
	font-size: 16px;
	cursor: pointer;
	width: 100px;
	height: 50px;
	position: relative;
	left: 40%;
	background-image: url("billy-huynh-v9bnfMCyKbg-unsplash.jpg");
	margin: 10px;
	color: black;
	border: 2px solid #000000;
}

.button3:hover
{
	color: white;
}

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
</style>

<?php
/* variables */
$w = $_POST["name"];
$x = $_POST["psw"];
$y = $_POST["email"];
$z = $_POST["comment"];

/* default variables */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1"; //name of your database needs to be the same as the one iniside phpMyAdmin

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection 
if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
//uname refers to database value
//user is the table inside database1
$query = mysqli_query($conn, "SELECT * FROM user WHERE uname = '$w'");
if(mysqli_num_rows($query) > 0)
{	//Error Message
	echo "
			<div class = 'omega-container'>
				<div class = 'bg-img'>
				<div class = 'modal1'>
				<div class = 'modal-content'>
					<img src = 'Simple.gif' alt = 'Avatar' class = 'avatar'>
					<br>
					<br>
					<br>
					<br>
				<div class = 'text'>Error Username already exists!</div>
			<button class = 'button3' id = 'rtn'>Return</button>
			
				
	";
		
}

else
{
	//Connected successfully 
	//as learnt in sql the INSERT INTO function has the VALUES keyword that goes with it
	
	$sql = "INSERT INTO user (uname, email, psw, comment) VALUES ('$w', '$x', '$y', '$z')";
	if($conn->query($sql) === TRUE)
	{
		echo "New record created successfully";
	}
	
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//closes Connection
	$conn->close();
	//header("location: MyWebsite.php");
}

?>

<script>
	var returnButton = document.getElementById("rtn");
	returnButton.addEventListener("click", () =>
	{
		window.location.href = "MyWebsite.php";
	});
	
</script>
</head>
<body>

</body>


