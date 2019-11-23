<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/ConnexionPage.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
    <link rel="icon" href="../Icon/car.png">
</head>
<body>
    <?php
        include "Navbar.php";
    ?>

    <main>
        <div id="login">
            <div class="left-half" id="left-half-login"></div>
            <div class="right-half" id="right-half-login">
                <form action="../PHP/Login.php" method="post">
                    <div class="main-login">
                        <h1>Glad to see you !</h1>
                        <label>Email</label>
                        <input type="text" class="input-login" name="email">
                        <label>Password</label>
                        <input type="password" class="input-login" name="password">
                        <button class="button-login">Login</button>
                        <a onclick="switchRegister()" class="link-login">or sign in</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="register">
            <div class="left-half" id="left-half-register">
                <form action="../PHP/InsertUser.php" method="post">
                    <div class="main-login">
                        <h1>Welcome !</h1>
                        <label>First name</label>
                        <input type="text" class="input-login" name="firstName">
                        <label>Last name</label>
                        <input type="text" class="input-login" name="lastName">
                        <label>Email</label>
                        <input type="text" class="input-login" name="email">
                        <label>Password</label>
                        <input type="password" class="input-login" name="password">
                        <input type="submit" value="Register" class="button-login">
                        <a class="link-login" onclick="switchConnexion()">or login</a>
                    </div>
                </form>
            </div>
            <div class="right-half" id="right-half-register"></div>
        </div>

    </main>
   <script src="../JS/loginSwitch.js"></script>
   <script src="../JS/navbar.js"></script>
</body>
</html>

