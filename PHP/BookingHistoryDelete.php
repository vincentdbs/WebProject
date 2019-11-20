<?php
include "Db_connexion.php";
if(isset($_GET['booking_id'])){
    $sql = "DELETE FROM booking WHERE booking_id=". $_GET['booking_id'];
    mysqli_query($con, $sql);
}
?>