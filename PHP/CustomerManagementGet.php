<?php
    include "Db_connexion.php";

    //retrieve user
    $sql_user = 'SELECT * FROM user WHERE user_role="user"';
    $result_user = mysqli_query($con, $sql_user);
    if (mysqli_num_rows($result_user) <= 0){
        die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
    }

    while($rows_user = mysqli_fetch_array($result_user)){ //retrieve all users and their booking
        echo '<tr>';
        echo "<td>" . $rows_user['user_id'] . "</td>";
        echo "<td>" . $rows_user['user_first_name'] . "</td>";
        echo "<td>" . $rows_user['user_last_name'] . "</td>";
        echo "<td>" . $rows_user['user_email'] . "</td>";

        //retrieve rented item by the user
        $today = date("Y-m-d");
        $sql_booking = "SELECT * from booking WHERE booking_user_id= " . $rows_user['user_id'] . " AND booking_pickup_date < '". $today . "' AND booking_return_date > '" . $today . "'";
        $result_booking = mysqli_query($con, $sql_booking);
        if (mysqli_num_rows($result_booking) <= 0){
            echo "<td>No</td>";
            echo "<td></td>";
        }
        else{
            echo "<td>Yes</td>";
            echo "<td>";

            echo "<img class='icon_table' onclick='displayDiv(this)' src='../Icon/down_arrow.png' ></img>";
            echo "</td>";
        }
        echo "</td>";
        echo "<td>";
        echo "<img class='icon_table' onclick='upgradeToManager(". $rows_user['user_id'] .")' src='../Icon/updgrade_arrow.png' ></img>";
        echo "</td>";
        echo "</tr>";

        //display all rented item
        while ($rows_booking = mysqli_fetch_array($result_booking)){
            $sql_car = "SELECT * FROM car WHERE car_id=" . $rows_booking['booking_car_id'];
            $result_car = mysqli_query($con, $sql_car);
            if (mysqli_num_rows($result_booking) <= 0){
                echo "<p>Error</p>";
            }
            else{
                $rows_car = mysqli_fetch_array($result_car);
                echo "<tr class='item-tr' style='display: none'>
                <td colspan='7'>
                    <div class='item'>
                        <img src='" . $rows_car['car_photo'] . "'class='item-image'>
                        <div class='item-div'>
                            <table>
                                <tr>
                                    <td>#</td>
                                    <td>" . $rows_car['car_id'] . "</td>
                                </tr>
                                <tr>
                                    <td>Name: </td> 
                                    <td>" .  $rows_car['car_name'] ."</td>
                                    <td>Brand: </td>
                                    <td>" . $rows_car['car_brand'] . "</td>
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
                    </div>
                </td>
            </tr>";
            }
        }
    }
?>
