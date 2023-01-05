<?php session_start();?>
<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-main.css" ></link>   
</head>

<!-- Prevents the user from skipping the login -->
<?php
if(isset($_SESSION["isActive"]) == false)
{
    echo"
    <div class = 'modal1'>
    <div class = 'modal-content'>
        <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class = 'text'>ERROR LOGIN REQUIRED!!</div>";
    exit();
}
?>
<?php

        if(isset($_POST['button3'])) 
        {
            button3();
        }

        function button3() 
        {
            session_unset();
            header("location: ../Api-login.php");
        }    
?>
<body>
    <div class = "fadeIn"></div>
        <div class = "splash-screen">
            Welcome <?php print_r($_SESSION["userName"]);?>
        </div>
    <div class = "background-image">
        <div class = "modal1"></div>
    </div>
    <!---
        DATABASES SHOWN
    --->
    
    <div class = "information-databases" id = "info2">
        List of Databases Available:<br>
        <?php 
            $conn = mysqli_connect("localhost", "root", "");
            //Check connection
            if($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            //Shows Databases
            $db = mysqli_query($conn, "SHOW DATABASES");
            $dbs = array();
            while($set = mysqli_fetch_row($db))
            {
                $dbs[] = $set[0];
            }    
            echo implode('<br/>', $dbs);
        ?>
    </div>

    <!---
        LOGIN DETAILS OF USER
    --->
    <div class = "info-show" id = "id-show"></div>
    <div class = "info-hider" id = "id-hid"></div>
    <div class = "information" id = "info1">
        UserName:  <b><?php print_r($_SESSION["userName"]);?></b>
        <br>
        Database:  <b>No Database selected</b>
        <br>
        Session Active:  <b><?php print_r($_SESSION["isActive"]);?></b>
        <br>
        Last Active:  <b><?php print_r($_SESSION["latestLogin"]);?></b>
    </div>

                                    <!---MAIN API WINDOW--->

    <!--- Creates database -->
    <div class = "createdb">
        <div class = "text-in">Create Database and tables</div>
        <div class = "line"></div>
        <br>
        <form method = "post" action = "../Main/Api-db.php">
            <input type = "text" placeholder = "Database Name" name = "newDatabase" autocomplete = "off" required>
            <br>
            <br>
            Would you like to add a table to your Database?
            <br>
            <button class = "button4" id = "btn4" type = "button" onclick = "document.querySelector('.tables').style.animation = 'fadeIn 1s ease-in forwards'">
            Create Table</button>
            <button class = "button4" id = "btn5" type = "submit" onclick = "window.location.href = 'Main/Api-table.php';">No</button>
            <br>
            <br>
            
            <div class = "tables">
            <form method = "post" action = "../Main/Api-db.php">
                Table Name: <input type = "text" placeholder = "Table Name" name = "newTable" autocomplete = "off" required>
                <br>
                <br>
                    Number of Table Columns:
                                    <select name = "columnNumber">
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
                Column 1:
                <input type = "text" placeholder = "Name" name = "column1" autocomplete = "off" required>  <select style = "width: 80px;"name = "c1type">
                                                                                                    <option value = "none" selected disabled>Type</option>
                                                                                                    <option>varchar(255)</option>
                                                                                                    <option>int(15)</option>
                                                                                                  </select>
                <br>
                Column 2:
                <input type = "text" placeholder = "Name" name = "column2" autocomplete = "off">  <select style = "width: 80px;"name = "c2type">
                                                                                                    <option value = "none" selected disabled>Type</option>
                                                                                                    <option>varchar(255)</option>
                                                                                                    <option>int(15)</option>
                                                                                                  </select>
                <br>
                Column 3:
                <input type = "text" placeholder = "Name" name = "column3" autocomplete = "off">  <select style = "width: 80px;"name = "c3type">
                                                                                                    <option value = "none" selected disabled>Type</option>
                                                                                                    <option>varchar(255)</option>
                                                                                                    <option>int(15)</option>
                                                                                                  </select>
                <br>
                Column 4:
                <input type = "text" placeholder = "Name" name = "column4" autocomplete = "off">  <select style = "width: 80px;"name = "c4type">
                                                                                                    <option value = "none" selected disabled>Type</option>
                                                                                                    <option>varchar(255)</option>
                                                                                                    <option>int(15)</option>
                                                                                                  </select>
                <br>
                <button class = "button4" id = "btn6" type = "submit">Confirm</button>
                
            </form>
        </div>
        </form> 
    
    </div>
    
    <!-- Connect to database -->
    <div class = "connectdb" id = "connect">
        <div class = "text-in">Connects to your preffered database</div>
        <div class = "line"></div>
        <br>
        <form method = "post" action = "../Main/Api-tableselect.php">
            <input type = "text" placeholder = "Database name" name = "databaseName" autocomplete = "off" required>
            <br>
            <button class = "button4" id = "btn7" type = "submit">Confirm</button>

        </form>
    </div>


    
    <!-- Logout -->
    <form method = "post">
        <input type = "submit" name = "button3" class = "main logout" id = "m4" value = "Logout">Logout</input>
    </form>

    <!-- Main Api-containers --> 
    <div class = "main create-database" id = "m1"><br><br><br><br><br>Create a Database</div>
    <div class = "main login-database" id = "m2"><br><br><br><br><br>Connect to Database</div>
    <div class = "main about" id = "m3"><br><br><br><br><br>About</div>

    <!-- Return Button -->
    <button class = "return-button" id = "rtnbtn01">Return</button>

</body>
<script src = "Api.js"></script>






