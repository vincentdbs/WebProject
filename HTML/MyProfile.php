<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>My profile</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/MyProfile.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php
        include "../HTML/Navbar.html";
    ?>

    <div class="side-bar">
        <i class="material-icons">edit</i>
        <i class="material-icons">lock</i>
        <i class="material-icons">history</i>
        <i class="material-icons">timer</i>
    </div>

    <div class="info">
        <div class="category">
            <form>
                <h2>Personal information</h2>
                <label>Last name</label>
                <input type="text">
                <label>First name</label>
                <input type="text">
                <label>Email</label>
                <input type="email">
            </form>
        </div>

        <div class="category">
            <h2>Password</h2>
            <form>
                <label>Old password</label>
                <input type="password">
                <label>New password</label>
                <input type="password">
                <label>Confirm password</label>
                <input type="password">
            </form>
        </div>

        <div class="category">
            <h2>History</h2>
        </div>
    </div>

    <script src="../JS/navbar.js"></script>
</body>
</html>