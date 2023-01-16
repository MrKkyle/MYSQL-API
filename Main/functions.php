
<?php 

/* Functions to Create Connection */
function createConnection1(string $servername, string $username, string $password, string $database)
{
    global $conn;
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed: " . $conn->connect_error);
    }
}
function createConnection2(string $servername, string $username, string $password)
{
    global $conn;
    $conn = mysqli_connect($servername, $username, $password);
    if($conn->connect_error)
    {
        die("Connection Failed: " . $conn->connect_error);
    }
}


/* Funtion to check the format of the database */
function tableCheck()
{
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
                die(); //enables the function to stop the running of the page
            }
        } 
    }   
}

/* Function to check if the table name is valid */

function validateTable(string $database, string $tableName, $conn)
{
    $showTables = mysqli_query($conn, "SHOW TABLES FROM $database");
    $tbs = array();
    while($table = mysqli_fetch_row($showTables))
    {
        $tbs[] = $table[0];
    }
    if(in_array($tableName,$tbs) == 0)
    {
        header("location: ../Errors/Error-tbs.php");
    }
}

/*Function to return the number of columns and their names */
function columnInfo(string $tableName, $conn)
{
    $query = "SHOW COLUMNS FROM $tableName";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc())
    {
        global $columns;
        global $columnNames;
        $columns[] = $row['Field']; 
    }
    
            /* Column Names */
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }
}

/* Function to create database */

/* Function to create Table */

/* Function to print out the table */


/* Function to run a mysql query(last) */













?>


