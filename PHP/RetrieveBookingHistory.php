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
            displayResultNext($result);
        }

    }

    function displayResult($result){
        while ($rows_booking = mysqli_fetch_array($result)){
            include "Db_connexion.php";
            $sql = "SELECT * FROM car WHERE car_id =" . $rows_booking['booking_car_id'];
            $result_car = mysqli_query($con, $sql);
            if (mysqli_num_rows($result_car) <= 0){
                echo "<scrip>alert('Something went wrong');</script>";
            }
            else{
                $rows_car = mysqli_fetch_array($result_car);
                echo "<div class=\"item\">
                    <img src='" . $rows_car['car_photo'] ."' class=\"item-image\">
                    <div class=\"item-div\">
                        <table>
                            <tr>
                                <td><img src='../Icon/car.png' class='icon_profile'></td>
                                <td>" . $rows_car['car_name'] . "</td>
                                <td>" . $rows_car['car_brand'] . "</td>
                            </tr>
                            <tr>
                                <td><img src='../Icon/car_seats.png' class='icon_profile'></td>
                                <td>" .  $rows_car['car_nb_seats'] ."</td>
                                <td><img src='../Icon/car_doors.png' class='icon_profile'></td>
                                <td>" . $rows_car['car_nb_doors'] . "</td>
                            </tr>
                            <tr>
                                <td><img src='../Icon/calendar.png' class='icon_profile'></td>
                                <td>" . $rows_booking['booking_pickup_date'] . "</td>
                                <td><img src='../Icon/back-in-time.png' class='icon_profile'></td>
                                <td>" . $rows_booking['booking_return_date'] . "</td>
                            </tr>
                            <tr>
                                <td><img src='../Icon/coin.png' class='icon_profile'></td>
                                <td>" . $rows_booking['booking_price'] . "</td>
                            </tr>
                        </table>
                    </div>
                </div>";
            }
        }
    }

    function displayResultNext($result){
        while ($rows_booking = mysqli_fetch_array($result)){
            include "Db_connexion.php";
            $sql = "SELECT * FROM car WHERE car_id =" . $rows_booking['booking_car_id'];
            $result_car = mysqli_query($con, $sql);
            if (mysqli_num_rows($result_car) <= 0){
                echo "<scrip>alert('Something went wrong');</script>";
            }
            else{
                $rows_car = mysqli_fetch_array($result_car);
                echo "<div class=\"item\">
                        <img src='" . $rows_car['car_photo'] ."' class=\"item-image\">
                        <div class=\"item-div\">
                            <table>
                                <tr>
                                    <td><img src='../Icon/car.png' class='icon_profile'></td>
                                    <td>" . $rows_car['car_name'] . "</td>
                                    <td>" . $rows_car['car_brand'] . "</td>
                                </tr>
                                <tr>
                                    <td><img src='../Icon/car_seats.png' class='icon_profile'></td>
                                    <td>" .  $rows_car['car_nb_seats'] ."</td>
                                    <td><img src='../Icon/car_doors.png' class='icon_profile'></td>
                                    <td>" . $rows_car['car_nb_doors'] . "</td>
                                </tr>
                                <tr>
                                    <td><img src='../Icon/calendar.png' class='icon_profile'></td>
                                    <td>" . $rows_booking['booking_pickup_date'] . "</td>
                                    <td><img src='../Icon/back-in-time.png' class='icon_profile'></td>
                                    <td>" . $rows_booking['booking_return_date'] . "</td>
                                </tr>
                                <tr>
                                    <td><img src='../Icon/coin.png' class='icon_profile'></td>
                                    <td>" . $rows_booking['booking_price'] . "</td>
                                    <td><img src='../Icon/bin.png' class='icon_profile bin' onclick='deleteBooking(". $rows_booking['booking_id'] .")'></td>
                                </tr>
                            </table>
                        </div>
                    </div>";
            }
        }
    }
?>