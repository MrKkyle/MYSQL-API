<?php session_start(); ?>
<?php include 'functions.php';?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = $_SESSION["_dbname"];
$tableName = $_SESSION["_tableName"];


$c1 = "";
$c2 = "";
$c3 = "";
$c4 = "";
$result = "";
$column0 = "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";

/* RECONNECT TO SERVER */
createConnection1($servername, $username, $password, $databaseName);

    /* Create Table */
createTable1($tableName, $conn);

?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-db.css" ></link>   
</head>
<body>

</body>
