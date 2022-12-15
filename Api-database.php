<?php session_start();?>

<?php

$servername = "localhost";
$database = $_SESSION["_dbname"];
$username = "root";
$password = "";
$tableName;

/* Get the table Name */
if(isset($_POST["tableName"]) == false)
{
    $tableName = $_SESSION["_tableName"];
}
else
{
    $tableName = $_POST["tableName"];
    $_SESSION["_tableName"] = $_POST["tableName"];
}

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Connection Failed " . $conn->connect_error);
}
/*
        //Check If Tablename is Valid 
$showTables = mysqli_query($conn, "SHOW TABLES FROM $database");
$table = mysqli_fetch_array($showTables);
$hod = array();
$hod = $table[0];
print_r($table[1]);

if(in_array($tableName, $hod) == FALSE)
{
    header("location: Error-tbs.php");  
}
*/               
        /* Number of Columns */
        
$query = "SHOW COLUMNS FROM $tableName";
$result = $conn->query($query);
while($row = $result->fetch_assoc())
{
    $columns[] = $row['Field'];    
    $columnNumber = sizeof($columns); 
}

        /* Column Names */
$db = mysqli_query($conn, $query);
while($set = mysqli_fetch_row($db))
{
    $columnNames[] = $set[0];
} 


?>

<?php
if($_SESSION["_dbname"] == "")
{
    header("location: Error-db.php");
}
?>
<head>
<link rel = "stylesheet" type = "text/css" href = "Api-database.css" ></link>   
</head>
<body>
    <div class = "background-image">
        <div class = "modal2"></div>
    </div>

    <div class = "information2" style = "height: 125px;">
    Connected to: <?php print_r($database); ?> <br>
    Using table: <?php print_r($tableName)?> <br>
    Column Names: <br><?php
    for($i = 0; $i < sizeof($columnNames); $i++)
    {print_r($columnNames[$i] . " <br>");}
    ?> <br>

    </div>


    <!-- Edit the database -->
    <div class = "editdb" id = "edit">
        <div class = "text-in">Edit Database and tables</div>
        <div class = "line"></div>
        <br>
        <button class = "button5" type = "button" onclick = "window.location.href = 'Api-table.php';">View Table Information<i class = "m" style = "background-image: url('Images\\view.png');"></i></button><br>
        <button class = "button5" type = "button" id = "btn1">Add Table Information<i class = "m" style = "background-image: url('Images\\new.png');"></i></button><br>
        <button class = "button5" type = "button" id = "btn2">Update Table Information<i class = "m" style = "background-image: url('Images\\update.png');"></i></button><br>
        <button class = "button5" type = "button" id = "btn3">Create New Table<i class = "m" style = "background-image: url('Images\\new.png');"></i></button><br> 
        <button class = "button5" type = "button" id = "btn4">Delete Table Information<i class = "m" style = "background-image: url('Images\\remove.png');"></i></button><br>
        <button class = "button5" type = "button" id = "btn5">Delete A Table<i class = "m" style = "background-image: url('Images\\remove2.png');"></i></button><br>
        <button class = "button5" type = "button" id = "btn5" onclick = "window.location.href = 'Api-main.php';">Return to home<i class = "m" style = "background-image:url('Images\\home.png');"></i></button><br>
    </div>

    <!-- Add info to database -->
    <div class = "addInfo" id = "info1">
        <span id = "span01" onclick = "document.getElementById('info1').style.display = 'none'" class = "close" title = "Close Modal" ></span>
        <br>
        <div class = "text-modal">Add Information</div><br><br>
        <form method = "post" action = "worker.php">

        <?php
        /* enables the form to shift depending on the table information */
        for($i = 0; $i < sizeof($columnNames); $i++)
        {
            echo"
            <div class = 'text-modal'>$columnNames[$i]</div>
            <input type = 'text' name = 'value$i' placeholder = 'Enter value' autocomplete = 'off' required>
            <br><br>
            ";
        }
        ?>

            <button class = "button4" type = "submit" style = "left: 40%;" name = "addBtn">Confirm</button>
        </form>
    </div>

    <!-- Update database Info -->
    <div class = "updateInfo" id = "info2">
        <span id = "span02" onclick = "document.getElementById('info2').style.display = 'none'" class = "close" title = "Close Modal" ></span>
        <br>       
        <div class = "text-modal">Update Information</div><br>
        <form method = "post" action = "worker.php">
            <div class = "text-modal">Enter Old value</div><br>
            <input type = "text" name = "ID" placeholder = "Enter ID" autocomplete = "off" required>
            <br><br>
            <div class = "text-modal">Enter field(Column) that will be changed</div><br>
            <input type = "text" name = "changeID" placeholder = "Enter value" autocomplete = "off" required>
            <br><br>
            <div class = "text-modal">Enter new Value</div><br>
            <input type = "text" name = "newID" placeholder = "Enter new value" autocomplete = "off" required>
            <br><br>
            
            <button class = "button4" type = "submit" style = "left: 40%;" name = "updateBtn">Confirm</button>
        </form>
    </div>

    <!-- Create new Table -->
    <div class = "createInfo" id = "info3">
        <span id = "span03" onclick = "document.getElementById('info3').style.display = 'none'" class = "close" title = "Close Modal" ></span>
        <br>       
        <div class = "text-modal">Create new Table</div><br>
        <form method = "post" action = "worker.php">
            <div class = "text-modal">New Table Name</div>
            <input type = "text" placeholder = "Table Name" name = "newTable" autocomplete = "off" required>
                <br>
                <br>
                    <div class = "text" style = "color: white;">Number of Table Columns:</div>
                                    <select style = "width:50px; height:25px; border-radius:5px; position:absolute; left: 268px;">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <br>
                                    <br>
                <div class="tooltip">Additional Information
                    <span class="tooltiptext">When naming your database ensure that: <br>
                                            <br>
                                            1)It has no spaces between words<br>
                                            2)IF you want spaces, use the underscore(_)<br>
                                            3)These same rules apply to the column names<br>
                                            4)All database Names will be converted to LOWERCASE
                                            <br>
                                            When inserting column types: <br>
                                            <br>
                                            1)for 'int' values ensure you enter the type + number of digits<br>
                                            Example: varchar(255) or int(10)<br>
                                            2)for columns containing words: use varchar<br>
                                            3)for columns containing integers: use int<br>
                    </span>
                </div>
                <br>
                <br>                    
                <div class = "text" style = "color: white;">Column 1:</div>
                <input type = "text2" placeholder = "Name" name = "column1" autocomplete = "off"><input type = "var" placeholder = "type" name = "c1type" autocomplete = "off">
                <br>
                <div class = "text" style = "color: white;">Column 2:</div>
                <input type = "text2" placeholder = "Name" name = "column2" autocomplete = "off"><input type = "var" placeholder = "type" name = "c2type" autocomplete = "off">
                <br>
                <div class = "text" style = "color: white;">Column 3:</div>
                <input type = "text2" placeholder = "Name" name = "column3" autocomplete = "off"><input type = "var" placeholder = "type" name = "c3type" autocomplete = "off">
                <br>
                <div class = "text" style = "color: white;">Column 4:</div>
                <input type = "text2" placeholder = "Name" name = "column4" autocomplete = "off"><input type = "var" placeholder = "type" name = "c4type" autocomplete = "off">
                <br>
                
                <button class = "button4" type = "submit" style = "left: 40%;" name = "tbBtn">Confirm</button>
                
            </form>
    </div>

    <!-- Delete database info-->
    <div class = "deleteInfo" id = "info4">
        <span id = "span04" onclick = "document.getElementById('info4').style.display = 'none'" class = "close" title = "Close Modal" ></span>
        <br>     
        <div class = "text-modal">Delete Table Information</div>
        <form method = "post" action = "worker.php">
            <br>
            <div class = "text-modal">Enter ID</div>
            <input type = "text" name = "delID" placeholder = "Enter ID" autocomplete = "off" required>
            <br><br>

            <button class = "button4" type = "submit" style = "left: 40%;" name = "delDbBtn">Confirm</button>
        </form>
    </div>

    <!-- Delete Table -->
    <div class = "deleteTable" id = "info5">
        <span id = "span05" onclick = "document.getElementById('info5').style.display = 'none'" class = "close" title = "Close Modal" ></span>
        <br>       
        <div class = "text-modal">Delete A Table</div><br>
        <form method = "post" action = "worker.php">
            <div class = "text-modal">Enter Table Name</div><br>
            <input type = "text" name = "delTable" placeholder = "Enter table name" autocomplete = "off" required>
            <br><br>

            <button class = "button4" type = "submit" style = "left: 40%;" name = "delTbBtn">Confirm</button>
        </form>
    </div>
</body>

<script src = "Api-database.js"></script>
