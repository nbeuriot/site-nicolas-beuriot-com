<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/3e51434b33.js" crossorigin="anonymous"></script>
    <script src="scripts/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script src="scripts/main.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="style.php">
    <title>Nicolas BEURIOT</title>
</head>
<body>
 

    <div class="lang">
        <div class="langbox">
                <img src="img/Flag_of_France.svg" alt="French flag">
                <p>Français</p>
        </div>
        <div class="langbox">
                <img src="img/Flag_of_the_United_Kingdom.svg" alt="United Kingdom Flag">
                <p>English</p>
        </div>
    </div>

    <div class="top">
        <img src="img/Picture_of_Nicolas_BEURIOT.jpeg" alt="Picture of Nicolas BEURIOT" style="visibility: hidden;">
        <div class="title">
            <p style="visibility: hidden;">Hi!, I'm Nicolas BEURIOT and I'm freelance in DEV</p>
            <div class="menu">
                <ul>
                    <li id="menu-about" class="selected">About</li>
                    <li id="menu-cv">CV</li>
                    <li id="menu-somelinks">Links</li>
                    <li id="menu-hobbies">Hobbies</li>
                    <li id="menu-contact">Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="middle">
        <?php include ("middleleftabout.php") ?>
    </div>
    
</body>
</html>