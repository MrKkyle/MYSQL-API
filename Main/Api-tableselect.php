<?php session_start();?>

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
$conn = mysqli_connect($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Connection Failed " . $conn->connect_error);
}
?>

<body>

    <div class = "background-image">
        <div class = "modal1">
            <div class = "modal-content" style = "position:fixed; left:38%; margin: 0% auto 3% auto;">
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
        <div class = "information" style = "top: 20px; height: 35px;">
            Connected to: <?php print_r($database);?>
        </div>

        <!-- Displays the tables inside the database -->
        <div class = "information2" style = "overflow: auto;">Tables Available:<br>
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