<?php
    include "Db_connexion.php";

    $sql = "SELECT * FROM booking WHERE booking_user_id=" . $_SESSION['user_id'];
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
                        <td>#</td>
                        <td>" . $rows_car['car_id'] . "</td>
                    </tr>
                    <tr>
                        <td>Nb seats: </td>
                        <td>" .  $rows_car['car_nb_seats'] ."</td>
                        <td>Nb doors: </td>
                        <td>" . $rows_car['car_nb_doors'] . "</td>
                    </tr>
                    <tr>
                        <td>Pickup date: </td>
                        <td>" . $rows_booking['booking_pickup_date'] . "</td>
                        <td>Return date: </td>
                        <td>" . $rows_booking['booking_return_date'] . "</td>
                    </tr>
                    <tr>
                        <td>Price (RM): </td>
                        <td>" . $rows_booking['booking_price'] . "</td>
                    </tr>
                </table>
            </div>
        </div>";
        }
    }
?>
