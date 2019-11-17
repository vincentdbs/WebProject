<?php
    session_start();
    include "Db_connexion.php";

    $car_id = $_SESSION['car_id'];
    $user_id = $_SESSION['user_id'];
    $pickup_date = $_SESSION['pickup_date'];
    $return_date = $_SESSION['return_date'];
    $booking_price = $_SESSION['booking_price'];

    echo "<script>alert($booking_price)</script>";

    $sql = "INSERT INTO booking(booking_car_id, booking_user_id, booking_pickup_date, booking_return_date, booking_price)
                VALUES
                ('$car_id', '$user_id', '$pickup_date', '$return_date', '$booking_price')";

    if (!mysqli_query($con, $sql)) {
        die("<script>alert('Your booking has not been completed. Try again later !')");
    }

    mysqli_close($con);
?>
