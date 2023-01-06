<?php session_start(); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = $_SESSION["_dbname"];
$tableName = $_SESSION["_tableName"];
$column1 = $_SESSION["c1name"];
$column2 = $_SESSION["c2name"];
$column3 = $_SESSION["c3name"];
$column4 = $_SESSION["c4name"];

$c1type = $_SESSION["c1type"];
$c2type = $_SESSION["c2type"];
$c3type = $_SESSION["c3type"];
$c4type = $_SESSION["c4type"];


$c1 = "";
$c2 = "";
$c3 = "";
$c4 = "";
$result = "";
$column0 = "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";

/* RECONNECT TO SERVER */
$conn = mysqli_connect($servername, $username, $password, $databaseName);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}
    /* Create Table */
if($column1 != "")
{
    $c1 .= $column1 . " " . $c1type . " NOT NULL,";  
}
if($column2 != "")
{
    $c2 .= $column2 . " " . $c2type . " NOT NULL,";  
}
if($column3 != "")
{
    $c3 .= $column3 . " " . $c3type . " NOT NULL,"; 
}
if($column4 != "")
{
    $c4 .= $column4 . " " . $c4type . " NOT NULL,"; 
}

$result .= $column0 . $c1 . $c2 . $c3 . $c4;
$result = rtrim($result, ", ");


$query = "CREATE TABLE $tableName ($result)";

if(mysqli_query($conn, $query))
{
    echo"
    <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
            <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
            <br><br><br><br><br><br><br><br>
        <div class = 'text'>Table created</div>  
        <button class = 'button3' onclick = 'window.location.href = `Api-table.php`;'>Proceed</button>
    ";   
}
else
{
    echo"
    <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
            <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
            <br><br><br><br><br><br><br><br>
        <div class = 'text'>Failed to create Table</div>  
        <button class = 'button3' onclick = 'window.location.href = `Api-main.php`;'>Proceed</button>
    ";   
}
?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-db.css" ></link>   
</head>
<body>

</body>
