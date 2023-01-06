<?php 
session_start(); 
?>
<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-database.css" ></link> 	

<?php
echo "
        <div class = 'omega-container'>
            <div class = 'background-image'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br><br><br><br><br><br><br><br>

            <div class = 'text'>
            Database format error:<br>
            Please insert a type for the corresponding column name to continue.  
            </div>
            
            <button class = 'button4' onclick = 'window.location.href = `../Main/Api-database.php`;'>Proceed</button>
            
";
?>


</head>
<body>

</body>