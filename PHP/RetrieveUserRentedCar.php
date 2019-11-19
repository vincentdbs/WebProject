<?php
    include "Db_connexion.php";

    $today = date("Y-m-d");
    $sql = "SELECT * from booking WHERE booking_user_id= " . $_SESSION['user_id'] . " AND booking_pickup_date < '". $today . "' AND booking_return_date > '" . $today . "'";
    /*TODO change pour avoir la actuelle booking*/
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) <= 0){
        die("<p> You have not rented a car yet.</p>");
    }


    while ($rows_booking = mysqli_fetch_array($result)){
        $sql_car = "SELECT * FROM car WHERE car_id=" . $rows_booking['booking_car_id'];
        $result_car = mysqli_query($con, $sql_car);
        if (mysqli_num_rows($result) <= 0){
            echo "<p>Error</p>";
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
?>
