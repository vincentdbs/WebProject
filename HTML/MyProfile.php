<?php
    session_start();
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
        header('location: ConnexionPage.php');
    }
?>

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
        include "../HTML/Navbar.php";
    ?>

    <div class="side-bar">
        <i class="material-icons">edit</i>
        <i class="material-icons">lock</i>
        <?php
            if($_SESSION['user_role'] == 'user'){
                echo "<i class=\"material-icons\">history</i>";
            }
        ?>

    </div>

    <div class="info">
        <div class="category">
            <form action="../PHP/EditPersonnalInfo.php" method="post">
                <h2>Personal information</h2>
                <label>Last name:</label>
                <input type="text" class="input-account" name="lastName" value="<?php echo $_SESSION['user_last_name'] ?>">
                <label>First name:</label>
                <input type="text" class="input-account" name="firstName" value="<?php echo $_SESSION['user_first_name'] ?>">
                <label>Email:</label>
                <input type="email" class="input-account" name="email" value="<?php echo $_SESSION['user_email'] ?>">
                <input type="submit" value="Save" class="button-save">
            </form>
        </div>

        <div class="category">
            <h2>Password</h2>
            <p class="little">You want to change your password, nothing more simple. Enter your old password then type your new one and confirm it. That's it !</p>
            <form action="../PHP/EditPassword.php" method="post">
                <label>Old password:</label>
                <input type="password" class="input-account" name="pwd_previous">
                <label>New password:</label>
                <input type="password" class="input-account" name="pwd_new">
                <label>Confirm password:</label>
                <input type="password" class="input-account" name="pwd_confirm">
                <input type="submit" value="Save" class="button-save">
            </form>
        </div>

        <?php
            if($_SESSION['user_role'] == 'user'){
                echo " <div class=\"category\">
                         <h2>History</h2>";
                include "../PHP/RetrieveUserRentedCar.php";
                echo "</div>";
            }
        ?>
    </div>

    <script src="../JS/navbar.js"></script>
</body>
</html>