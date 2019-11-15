<?php
    include "Db_connexion.php";

    //retrieve user
    $sql_user = 'SELECT * FROM user WHERE user_role="user"';
    $result_user = mysqli_query($con, $sql_user);
    if (mysqli_num_rows($result_user) <= 0){
        die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
    }


    while($rows_user = mysqli_fetch_array($result_user)){
        echo "<tr>";
        echo "<td>" . $rows_user['user_id'] . "</td>";
        echo "<td>" . $rows_user['user_first_name'] . "</td>";
        echo "<td>" . $rows_user['user_last_name'] . "</td>";
        echo "<td>" . $rows_user['user_email'] . "</td>";

        //retrieve rented item by the user
        $sql_booking = 'SELECT * FROM booking where booking_user_id=' . $rows_user['user_id'];
        $result_booking = mysqli_query($con, $sql_booking);
        if (mysqli_num_rows($result_booking) <= 0){
            echo "<td>No</td>";
            echo "<td></td>";
        }
        else{
            echo "<td>Yes</td>";
            echo "<td><i class='material-icons' onclick='displayDiv()'>keyboard_arrow_down</img></td>"; //display on click
        }

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
                <td colspan='6'>
                    <div class='item'>
                        <img src='../Image/fiat500.jpg' class='item-image'>
                        <div class='item-div'>
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
                    </div>
                </td>
            </tr>";
            }
        }
    }
?>
