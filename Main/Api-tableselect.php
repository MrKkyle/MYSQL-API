<?php session_start();?>
<?php include 'functions.php';?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-main.css"></link> 	
</head>

<?php
$_SESSION["_dbname"] = $_POST["databaseName"];
$database = $_POST["databaseName"];

/* Connection */
$servername = "localhost";
$database = $_POST["databaseName"];
$username = "root";
$password = "";
$_SESSION["dbName"] = $database;
createConnection2($servername, $username, $password);
$db = mysqli_query($conn, "SHOW DATABASES");
$dbs = array();
while($set = mysqli_fetch_row($db))
{
    $dbs[] = $set[0];
    
}
if(in_array($database,$dbs) == 0)
{
    header("location: ../Errors/Error-dbselect.php");
}

?>

<body>

    <div class = "background-image">
        <div class = "modal1">
            <div class = "modal-content">
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br>
                <br>
                Connected to Database<br>
                Which table would you like you connect to?<br><br>
                <form method = "post" action = "Api-database.php">
                    <input type = "text" placeholder = "Table name" name = "tableName" autocomplete = "off" required>
                    <br><br>
                    <button class = "button4" type = "submit">Submit</button><button class = "button4" type = "button" onclick = "window.location.href = 'Api-main.php';">Return</button>
                </form>
            
            </div>
        </div>    

        <!-- Displays the database connected to -->
        <div class = "information" style = "top: 20px; height: 15px; display: block;">
            Connected to: <?php print_r($database);?>
        </div>

        <!-- Displays the tables inside the database -->
        <div class = "information2" style = "display: block">Tables Available:<br>
            <?php
                $showTables = mysqli_query($conn, "SHOW TABLES FROM $database");
                if($showTables == FALSE)
                {
                    echo" N/A ";
                }
                else
                {
                    while($table = mysqli_fetch_array($showTables))
                    {
                        echo($table[0] . "<br>");
                    }
                }
                
            ?>
        </div>

        
    </div>

</body>