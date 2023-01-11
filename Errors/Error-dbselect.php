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
            Incorrect Database name:<br>
            1)<b>Insert</b> a correct database name<br>
            2)Or <b>create</b> a new database<br></div>
            
            <button class = 'button3' onclick = 'window.location.href = `../Main/Api-main.php`;'>Proceed</button>
            
";
?>


</head>
<body>

</body>