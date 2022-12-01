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
        <img src="img/Picture_of_Nicolas_BEURIOT.jpeg" alt="Picture of Nicolas BEURIOT">
        <div class="title">
            <p>Hi!, I'm Nicolas BEURIOT and I'm looking for freelancing in DEV</p>
            <div class="menu">
                <ul>
                    <li onclick="about()">About</li>
                    <li onclick="cv()">CV</li>
                    <li>Links</li>
                    <li>Hobbies</li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="middle">
        <div class="left">
            <?php include ("middleleftcv.php") ?>

        </div>
        <div class="right">
            <form>
                <fieldset>
                    <legend>Order</legend>
                    <input type="radio" name="order" id="desc" checked><label for="desc">Descending</label> <br>
                    <input type="radio" name="order" id="asc"><label for="asc">Ascending</label>
                </fieldset>
            </form>

            <form>
                <fieldset>
                    <legend>Contract type</legend>
                    <input type="checkbox" name="ctype" id="freelance" checked><label for="freelance">Freelancing</label><br>
                    <input type="checkbox" name="ctype" id="employee"><label for="employee">Employee</label>
                </fieldset>
            </form>

            <form>
                <fieldset>
                    <legend>Occupation Type</legend>
                    <input type="checkbox" name="otype" id="mission" checked><label for="mission">Mission</label><br>
                    <input type="checkbox" name="otype" id="traininggiven"><label for="traininggiven">Training given</label><br>
                    <input type="checkbox" name="otype" id="trainingreceive"><label for="trainingreceive">Training receive</label><br>
                </fieldset>
            </form>
            </ul>
        </div>

    </div>
    
</body>
</html>