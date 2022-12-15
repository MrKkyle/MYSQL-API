<?php session_start();?>
<head>
<link rel = "stylesheet" type = "text/css" href = "Api-login.css" ></link>     
<?php
echo "
    <div class = 'background-image'>
        <div class = 'container'>
            <div class = 'modal1'>
                <form class = 'modal-content' action = 'Login-Authenticator.php' method = 'post'>
                <img src = 'Images\\Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br>
                <br>
                <div class = 'text'><b>Username</b></div>
                <input type = 'text' placeholder = 'Enter Username' name = 'userName' autocomplete = 'off' required>
                <div class = 'text'><b>Password</b></div>
                <input type = 'password' placeholder = 'Enter Password' name = 'passCode' required>
                <br>
                <button class = 'button3' type = 'submit' name ='Go' value = 'submit'>Submit</button>
                <br>
            </div>    
        </div>
        <div class = 'information'>
            UserName: <b>N/A</b>
            <br>
            Database: <b>N/A</b>
            <br>
            Session Active: <b>Not active</b>
            <br>
            Latest Login: N/A
        </div>
    </div>
    ";
?>

</head>
<body>
     
</body>


















