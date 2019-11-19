<?php
    function retieveActualBooking(){
        include "Db_connexion.php";
        $today = date("Y-m-d");

        $sql = "SELECT * from booking WHERE booking_user_id= " . $_SESSION['user_id'] . " AND booking_pickup_date < '". $today . "' AND booking_return_date > '" . $today . "'";
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
        $today = date("Y-m-d");

        $sql = "SELECT * from booking WHERE booking_user_id= " . $_SESSION['user_id'] . " AND booking_pickup_date < '". $today . "' AND booking_return_date < '" . $today . "'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>You never have booked a car yet.</p>";
        }
        else{
            displayResult($result);
        }
    }

    function retieveNextBooking(){
        include "Db_connexion.php";
        $today = date("Y-m-d");

        $sql = "SELECT * from booking WHERE booking_user_id= " . $_SESSION['user_id'] . " AND booking_pickup_date >'". $today . "'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>You do not have any later booking</p>";
        }
        else{
            displayResult($result);
        }

    }

    function displayResult($result){
        while ($rows = mysqli_fetch_array($result)){
            echo '<p>' . $rows['booking_pickup_date'] . '</p>';

        }
    }
?>