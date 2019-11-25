<?php
    include "Db_connexion.php";
    if(isset($_GET['car_id'])){ //delete car and associate booking
        $sql = "DELETE FROM car WHERE car_id=". $_GET['car_id'];
        mysqli_query($con, $sql);
        $sql = "DELETE FROM booking WHERE booking_car_id=". $_GET['car_id'];
        mysqli_query($con, $sql);
    }
?>