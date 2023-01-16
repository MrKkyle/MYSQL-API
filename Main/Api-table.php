<?php session_start();?>
<?php include 'functions.php';?>

<!-- Displays the information in the database -->
<?php

/*ensure the names are the same FROM DIFFERENT PAGES*/
$tableName = $_SESSION["_tableName"];
$columnNumber;
$columnNames = array();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_SESSION["_dbname"];
createConnection1($servername, $username, $password, $dbname);


/* Returns the column Infomation for the selected Table */
columnInfo($tableName, $conn);   
?>


<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-table.css" ></link>   
</head>
<body>
    <div class = "background-image">
        <div class = "modal1"></div>
    </div>
    <button class = "button4" type = "button" onclick = "window.location.href = 'Api-Database.php';">Edit</button>
    <div class = "table-info">
    
    <?php 
    $username = "root"; 
    $password = ""; 
    $database = $dbname; 
    $mysqli = new mysqli($servername, $username, $password, $database); 
    $query = "SELECT * FROM $tableName";
    
    echo '<table border = "0" cellspacing = "2" cellpadding = "2" color = "white">';
    
    for($i = 0; $i < sizeof($columnNames); $i++)
    {
        echo"
        
            <td><font face = 'Arial'>$columnNames[$i]</font> </td>
        ";
    }
    
    /*Make this flexable */
    if ($result = $mysqli->query($query)) 
    {
        while ($row = $result->fetch_assoc()) 
        {
            for($i = 0; $i < sizeof($columnNames); $i++)
            {
                ${'field' . $i . 'name'} = $row["$columnNames[$i]"];
            }
            
            echo" <tr>";
            for($i = 0; $i < sizeof($columnNames); $i++)
            {
                
                echo"
                
                <td> ${'field' . $i . 'name'} </td>
                    ";

            }
            echo" </tr>";     
        }
        $result->free();
    } 
    ?>  


    </div>

</body>
