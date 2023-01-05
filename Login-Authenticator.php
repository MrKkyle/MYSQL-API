<?php session_start();?>
<head>
<style>

</style>

<?php
$namae = $_POST["userName"];
$passCode = $_POST["passCode"];

$_SESSION["userName"] = $namae;
$_SESSION["passCode"] = $passCode;
$_SESSION["isActive"] = "false";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api-database";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$query = mysqli_query($conn, "SELECT * FROM `api-credentials` WHERE userName = '$namae' AND passCode = '$passCode'");

if(mysqli_num_rows($query) > 0)
{
    header("location: Main/Api-main.php");
    $_SESSION["isActive"] = "true";
    $_SESSION["latestLogin"] = date("Y/m/d") . " " . date("h:i:sa");
}
else
{
    header("location: Errors/Error-page.php");
}
?>
</head>
<body> 
</body>