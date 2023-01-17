
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

/* Functions to print out the table */
function createTable1(string $tableName, $conn)
{
    global $c1;
    global $c2;
    global $c3;
    global $c4;
    global $column0;
    global $result;
    if($_SESSION["c1name"] != "")
    {
        $c1 .= $_SESSION["c1name"] . " " . $_SESSION["c1type"] . " NOT NULL,";  
    }
    if($_SESSION["c2name"] != "")
    {
        $c2 .= $_SESSION["c2name"] . " " . $_SESSION["c2type"] . " NOT NULL,";  
    }
    if($_SESSION["c3name"] != "")
    {
        $c3 .= $_SESSION["c3name"] . " " . $_SESSION["c3type"] . " NOT NULL,"; 
    }
    if($_SESSION["c4name"] != "")
    {
        $c4 .= $_SESSION["c4name"] . " " . $_SESSION["c4type"] . " NOT NULL,"; 
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
}
function createTable2(string $tableName, $conn)
{
    global $column0;
    global $c1;
    global $c2;
    global $c3;
    global $c4;
    global $result;
    if($_POST["column1"] != "")
    {
        $c1 .= $_POST["column1"] . " " . $_POST["c1type"] . " NOT NULL,";  
    }
    if($_POST["column2"] != "")
    {
        $c2 .= $_POST["column2"] . " " . $_POST["c2type"] . " NOT NULL,";  
    }
    if($_POST["column3"] != "")
    {
        $c3 .= $_POST["column3"] . " " . $_POST["c3type"] . " NOT NULL,"; 
    }
    if($_POST["column4"] != "")
    {
        $c4 .= $_POST["column4"] . " " . $_POST["c4type"] . " NOT NULL,"; 
    }
    $result .= $column0 . $c1 . $c2 . $c3 . $c4;
    $result = rtrim($result, ", ");
    

    
    $query = "CREATE TABLE $tableName ($result)";
    
    if(mysqli_query($conn, $query))
    {
        echo "
            <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
            <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
            <br><br><br><br><br><br><br><br>
            <div class = 'text'>Query successful!<br></div>  
            <button class = 'button4' onclick = 'window.location.href = `Api-database.php`;'>Proceed</button>
        ";
    } 
    else
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Query unsuccessful!<br></div>  
        <button class = 'button4' onclick = 'window.location.href = `Api-database.php`;'>Proceed</button>
        ";
    }
}

/* Function to obtain information for queries run */

function workerInfo($conn)
{
    /* Get the table Name */
    global $tableName;
    if(isset($_POST["tableName"]) == false)
    {
        $tableName = $_SESSION["_tableName"];
    }
    else
    {
        $tablename = $_POST["tableName"];
        $_SESSION["_tableName"] = $_POST["tableName"];
    }
            /* Column Names */
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }    
}


/* Function to run a mysql query(last) */














?>


