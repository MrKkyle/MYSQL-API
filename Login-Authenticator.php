<?php

session_start();
include 'Main/functions.php';

$namae = $_POST["userName"];
$passCode = $_POST["passCode"];

$_SESSION["userName"] = $namae;
$_SESSION["passCode"] = $passCode;
$_SESSION["isActive"] = "false";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api-database";

createConnection1($servername, $username, $password, $dbname);

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
