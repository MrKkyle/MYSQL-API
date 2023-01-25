<?php session_start();?>
<?php include 'functions.php';?>

<?php

                                            /* Php functions */
                                            /* Add info */
function addInfo()
{   
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    $column = "";
    $values = "";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    
    
    if(isset($_POST["tableName"]) == false)
    {
        $tableName = $_SESSION["_tableName"];
    }
    else
    {
        $tableName = $_POST["tableName"];
        $_SESSION["_tableName"] = $_POST["tableName"];
    }
            /* Column Names */
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }
    
    /* Values of form data stored in variables */
    for($i = 0; $i < (sizeof($_POST) - 1); $i++)
    {
        ${'value' . $i} = $_POST["value$i"];          
    }
    /* Construct the query */
    for($v = 0; $v < (sizeof($_POST) - 1); $v++)
    {   

        $column .= $columnNames[$v] . ", ";
        $values .= "'" .${'value' . $v} . "'" . ", ";
    } 
    /* Remove last characters */
    $column = rtrim($column, ", ");
    $values = rtrim($values, ", ");

    $query = "INSERT INTO $tableName
    ($column) VALUES
    ($values)"; 

    print_r($query);
    
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

function updateInfo()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    $tableName = "";
    $ID = $_POST["ID"]; /* Identification */
    $changeID = $_POST["changeID"]; /* old value */
    $newID = $_POST["newID"];   /* new value */
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    } 
        /* Table Name */
    if(isset($_POST["tableName"]) == false)
    {
        $tableName = $_SESSION["_tableName"];
    }
    else
    {
        $tableName = $_POST["tableName"];
        $_SESSION["_tableName"] = $_POST["tableName"];
    }
            /* Column Names */
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }


    $query = "UPDATE $tableName SET $changeID = '$newID' WHERE id = $ID";
    print_r($query);
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
        <div class = 'text' style = 'color: black;'>Query unsuccessful!<br></div>  
        <button class = 'button4' onclick = 'window.location.href = `Api-database.php`;'>Proceed</button>
        ";
    }
    
}

function newTable()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    $tablename = $_POST["newTable"];
    $tablename = strtolower($tablename);
    $c1 = "";
    $c2 = "";
    $c3 = "";
    $c4 = "";
    $result = "";
    $column0 = "id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,";
    //Checks the format of the table
    tableCheck();

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
        $c4type = $_POST["c4type"];
    }

    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    } 
    createTable2($tablename, $conn);        
}

function deleteInformation()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    $tablename = "";
    $delID = $_POST["delID"];
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    
    /* Get the table Name */
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

    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }
    
    $query = "DELETE FROM $tableName WHERE id = $delID";
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

function deleteTable()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    

    /* Get the table Name */
    $tableName = $_POST["delTable"];

            /* Column Names */
       
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    if($db == FALSE)
    {
        header("location: Error-tbs.php");  
    }

    while($set = mysqli_fetch_row($db))
    {
        $columnNames[] = $set[0];
    }
    $query = "DROP TABLE $tableName";
    $showTables = mysqli_query($conn, "SHOW TABLES FROM $database");
    $table = mysqli_fetch_array($showTables);
    
    if(sizeof($table) > 1)
    {
        if(in_array($tableName, $table))
        {
            mysqli_query($conn, $query);
            echo "
                <div class = 'omega-container'>
                <div class = 'bg-img'>
                <div class = 'modal1'>
                <div class = 'modal-content'>
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br><br><br><br><br><br><br><br>
                <div class = 'text'>Query successful!<br></div> 
                <button class = 'button4' onclick = 'window.location.href = `Api-main.php`;'>Proceed</button>
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
    else 
    {
        echo "
        <div class = 'omega-container'>
        <div class = 'bg-img'>
        <div class = 'modal1'>
        <div class = 'modal-content'>
        <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
        <br><br><br><br><br><br><br><br>
        <div class = 'text'>Unable to remove table:<br>
                            Number of tables need to exceed 2 in database<br>
        </div>  
        <button class = 'button4' onclick = 'window.location.href = `Api-database.php`;'>Proceed</button>
        ";
    }    
    
}
function renameTable()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    /* Get the table Name */
    $oldTable = $_POST["oldTable"]; 
    $newTable = $_POST["newTb"];
    
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    

    /* Get the table Name */

            /* Column Names */
       
    $query = "SHOW COLUMNS FROM $oldTable";
    $db = mysqli_query($conn, $query);
    if($db == FALSE)
    {
        header("location: Error-tbs.php");  
    }

    $query = "ALTER TABLE $oldTable RENAME TO $newTable";
    print_r($query);
    
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
            <div class = 'text'>New Login required<br> Reason: New Table name detected<br></div> 
            <button class = 'button4' onclick = 'window.location.href = `Api-main.php`;'>Proceed</button>
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

function emptyInformation()
{
    $servername = "localhost";
    $database = $_SESSION["_dbname"];
    $username = "root";
    $password = "";
    /* Get the table Name */
    $tableName = $_POST["emptyTable"];

    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn->connect_error)
    {
        die("Connection Failed " . $conn->connect_error);
    }    

            /* Column Names */
       
    $query = "SHOW COLUMNS FROM $tableName";
    $db = mysqli_query($conn, $query);
    if($db == FALSE)
    {
        header("location: Error-tbs.php");  
    }
    $query = "TRUNCATE $tableName";

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
?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-database.css" ></link>   
</head>
<body>

<div class = "background-image">
    <div class = "modal1"></div>
</div>


<!-- success -->
<?php 
    if(isset($_POST['addBtn']))
    {
        addInfo();
    } 
    else if(isset($_POST['updateBtn']))
    {
        updateInfo();
    }
    else if(isset($_POST['tbBtn']))
    {
        newTable();
    }
    else if(isset($_POST['delDbBtn']))
    {
        deleteInformation();
    }
    else if(isset($_POST['delTbBtn']))
    {
        deleteTable();
    }
    else if(isset($_POST['emptyTb']))
    {
        emptyInformation();
    }
    else if(isset($_POST['renameTb']))
    {
        renameTable();
    }
    else
    {
        /* Fail */
    }
?>
</body>