<?php
    include "Db_connexion.php";
    session_start();
    $name = $_POST['car_name'];
    $brand = $_POST['car_brand'];
    $nb_doors = $_POST['car_nb_doors'];
    $nb_seats = $_POST['car_nb_seats'];
    $price = $_POST['car_price'];

    //update car info

    $sql = "UPDATE car SET car_name='" . $name . "', car_brand='" . $brand .
        "', car_nb_doors='" . $nb_doors . "', car_nb_seats='" . $nb_seats .
        "', car_price='" . $price . "' WHERE car_id ='" . $_SESSION['car_id'] . "'";

    mysqli_query($con, $sql);
    if(mysqli_affected_rows($con)<=0)
    {
        die ("<script>alert('Cannot update data!'); window.location.href='../HTML/EditCarPage.php?car_id='" . $_SERVER['REQUEST_URI'] . ";</script>");
    }else{
        unset($_SESSION['car_id']);
        echo "<script>alert('Data updated!);</script>";
        echo "<script>window.location.href='../HTML/CarManagement.php';</script>";
    }
?>
