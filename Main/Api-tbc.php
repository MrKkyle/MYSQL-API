<?php session_start();?>
<?php include 'functions.php';?>

<head>
<link rel = "stylesheet" type = "text/css" href = "../CSS/Api-main.css" ></link> 	
</head>

<body>

    <div class = "background-image">
        <div class = "modal1">
            <div class = "modal-content" style = "position:fixed; left:38%; margin: 0% auto 3% auto;">
                <img src = '../Images/Simple.gif' alt = 'Avatar' class = 'avatar'>
                <br>
                <br>
                Table Created<br>
                <button class = "button4" type = "submit" onclick = "window.location.href = 'Api-table.php';">Proceed</button>
            </div>
        </div>
    </div>

</body>