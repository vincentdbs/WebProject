<?php
    include "Db_connexion.php";
    if(isset($_GET['car_id'])){
        $sql = "DELETE FROM car WHERE car_id=". $_GET['car_id'];
        mysqli_query($con, $sql);
    }
?>