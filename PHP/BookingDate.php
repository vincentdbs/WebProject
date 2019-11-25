<?php
    session_start();
    $_SESSION['pickup_date'] = $_POST['pickup_date']; //store booking information session
    $_SESSION['return_date'] = $_POST['return_date'];
    $_SESSION['car_type'] = $_POST['car_type'];


    header('location: ../HTML/SelectionCar.php');
?>
