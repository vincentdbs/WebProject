<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    header('location: ConnexionPage.php');
}

//TODO securiser toutes les pages avec redirections en fonction du role
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Booking History</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/Booking.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php
    include "../HTML/Navbar.php";
    ?>



    <div class="content">
        <h2>Actual booking</h2>
        <?php include_once "../PHP/RetrieveBookingHistory.php"; retieveActualBooking(); ?>
    </div>

    <div class="content">
        <h2>Next booking</h2>
        <?php include_once "../PHP/RetrieveBookingHistory.php"; retieveNextBooking(); ?>
    </div>

    <div class="content">
        <h2>Previous booking</h2>
        <?php include_once "../PHP/RetrieveBookingHistory.php"; retrievePastBooking(); ?>
    </div>



    <script src="../JS/navbar.js"></script>
</body>
</html>