<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    header('location: ConnexionPage.php');
}
else if ($_SESSION['user_id'] == 'user'){
    header('location: HomePage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Edit car</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/EditCar.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
    <link rel="icon" href="../Icon/car.png">
</head>
<body>
<?php
include "../HTML/Navbar.php";
?>

<main>
    <div class="edit-content">
        <?php include "../PHP/EditCarGet.php";?>
    </div>

</main>
<script src="../JS/navbar.js"></script>
</body>
</html>