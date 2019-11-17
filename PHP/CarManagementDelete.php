<?php
    echo "<script>alert('fdsfdsfd')</script>";
    if(isset($_GET['car_id'])){
        $sql = "DELETE FROM car WHERE car_id=". $_GET['car_id'];
        mysqli_query($con, $sql);
    }
?>