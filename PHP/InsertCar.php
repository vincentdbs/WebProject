<?php
    include "Db_connexion.php";

    $car_name = $_POST['car_name'];
    $car_brand = $_POST['car_brand'];
    $car_nb_door = $_POST['car_nb_door'];
    $car_nb_seats= $_POST['car_nb_seat'];
    $car_price = $_POST['car_price'];
    $car_stock = $_POST['car_stock'];
    $car_type = $_POST['car_type'];

    $sql = "INSERT INTO car(car_name, car_nb_doors, car_nb_seats, car_stocks, car_price, car_brand, car_type)
            VALUES
            ('$car_name', '$car_nb_door', '$car_nb_seats', '$car_stock', '$car_price', '$car_brand', '$car_type')";

    if (!mysqli_query($con, $sql)) {
        die("Error : " . mysqli_error($con));
    }

    mysqli_close($con);
    include "../HTML/AddCar.php";
?>