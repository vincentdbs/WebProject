<?php
    session_start();
    $_SESSION['pickup_date'] = $_POST['pickup_date'];
    $_SESSION['return_date'] = $_POST['return_date'];
    $_SESSION['car_type'] = $_POST['car_type'];

    //echo $_SESSION['car_type'] . " : " . $_SESSION['return_date'] . " : " . $_SESSION['pickup_date'];

    header('location: ../HTML/SelectionCar.php');
?>
