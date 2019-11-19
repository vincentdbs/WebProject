<?php
    function retieveActualBooking(){
        include "Db_connexion.php";
        $today = date("Y/m/d");

        $sql = "SELECT * from booking WHERE booking_user_id=" . $_SESSION['user_id'] . " && booking_pickup_date < ". $today . " ORDER BY booking_pickup_date DESC";
        echo $sql;
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>You do not have any actual booking</p>";
        }
        else{
            echo "<p>Actual</p>";
            displayResult($result);
        }
    }

    function retrievePastBooking(){
        include "Db_connexion.php";
        $today = date("Y/m/d");

        $sql = "SELECT * from booking WHERE booking_user_id=" . $_SESSION['user_id'] . " && booking_pickup_date < ". $today;
        echo $sql;
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>You do not have any actual booking</p>";
        }
        else{
            echo "<p>Past</p>";
            displayResult($result);
        }
    }

    function retieveNextBooking(){
        include "Db_connexion.php";
        $today = date("Y/m/d");

        $sql = "SELECT * from booking WHERE booking_user_id=" . $_SESSION['user_id'] . " && booking_pickup_date > ". $today;
        echo $sql;
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>You do not have any actual booking</p>";
        }
        else{
            echo "<p>Past</p>";
            displayResult($result);
        }

    }

    function displayResult($result){
        echo "test";
        while ($rows = mysqli_fetch_array($result)){
            echo '<p>' . $rows['booking_car_id'] . '</p>';
        }
    }
?>