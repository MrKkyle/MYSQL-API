<?php session_start();?>

<?php
$databaseName = $_POST["newDatabase"];
$databaseName = strtolower($databaseName);
$tableName = $_POST["newTable"];
$columnNumber = $_POST["columnNumber"];

$_SESSION["_tableName"] = $_POST["newTable"];
$_SESSION["_dbname"] = $_POST["newDatabase"];
$_SESSION["tbName"] = $_POST["newTable"];
$_SESSION["c1name"] = $_POST["column1"];
$_SESSION["c2name"] = $_POST["column2"];
$_SESSION["c3name"] = $_POST["column3"];
$_SESSION["c4name"] = $_POST["column4"];


        /* Checks to see if any issues exists in the formatting of the database */
for($i = 1; $i <= 4; $i++)
{
    if($_POST["column" . $i] != "")
    {
        if(isset($_POST["c" . $i . "type"]) == TRUE)
        {
            $_SESSION["c" . $i . "type"] = $_POST["c" . $i . "type"];
        }
        else
        {
            header("location: ../Errors/Error-format.php");
        }
    }
}

if(isset($_POST["c2type"]) == FALSE)
{
    $_SESSION["c2type"] = "";
}
else
{
    $c2type = $_POST["c2type"];
}

if(isset($_POST["c3type"]) == FALSE)
{
    $_SESSION["c3type"] = "";
}
else
{
    $c3type = $_POST["c3type"];
}

if(isset($_POST["c4type"]) == FALSE)
{
    $_SESSION["c4type"] = "";
}
else
{
    $c4type = $_POST["c2type"];
}


?>

                                <!--Creates database from user's input -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $databaseName;
$result = "";

$conn = mysqli_connect($servername, $username, $password);
if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

$sql2 = "SHOW DATABASES LIKE '$databaseName'";
$result = mysqli_query($conn, $sql2); 
if(mysqli_num_rows($result) > 0)        //If database name exists
{
    //Inform user name is taken and return to Api-main.php
    header("location: ../Errors/Error-database.php");

}
else                                    //if database name doesnt exist
{
        //sql to create DATABASE
    $sql1 = "CREATE DATABASE $databaseName";
    if(mysqli_query($conn, $sql1))
    {
        echo"
        <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br><br><br><br><br><br><br><br>
            <div class = 'text'>Database created</div>  
            <button class = 'button3' onclick = 'window.location.href = `Api-tabler.php`;'>Proceed</button>
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
            <div class = 'text'>Database creation failed</div>  
            <button class = 'button3' onclick = 'window.location.href = `Api-main.php`;'>Proceed</button>
        ";   
    }
}



?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-db.css" ></link> 	

</head>
<body>

</body>