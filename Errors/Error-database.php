<?php 
session_start(); 
?>
<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Error-page.css" ></link> 	

<?php
echo "
        <div class = 'omega-container'>
            <div class = 'bg-img'>
            <div class = 'modal1'>
            <div class = 'modal-content'>
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br><br><br><br><br><br><br><br>

            <div class = 'text'>
            Database already exists:<br>
            1)<b>Rename</b> your database<br>
            2)Or <b>connect</b> to the database<br></div>
            
            <button class = 'button3' onclick = 'window.location.href = `../Main/Api-main.php`;'>Proceed</button>
            
";
?>


</head>
<body>

</body>