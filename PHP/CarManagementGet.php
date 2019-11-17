<?php
    include("Db_connexion.php");

    $sql = "SELECT * FROM car";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0){
        die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
    }

    while($rows = mysqli_fetch_array($result)){
        echo "<div class=\"card-column\">";
        echo "<div class=\"card-content\">";
        echo "<div class=\"content\">";
        echo "<img src='" . $rows['car_photo'] . "' class=\"card-car-image\">";
        echo "<h3>" . $rows['car_name'] . "</h3>";
        echo "<p class='little brand'>" . $rows['car_brand'] . "</p>";
        echo "<img src='../Icon/bin.png' class=\"icon_car\" id='bin' onclick='callPhp(" . $rows['car_id'] .")'>";
        echo "<table>";
        echo "<tr>";
        echo "<td><img src='../Icon/car_seats.png' class='icon_car'> </td>";
        echo "<td>" . $rows['car_nb_seats'] . "</td>";
        echo "<td><img src='../Icon/car_doors.png' class='icon_car'> </td>";
        echo "<td>" . $rows['car_nb_doors'] . "</td>";
        echo "<td><img src='../Icon/coin.png' class='icon_car'> </td>";
        echo "<td>" . $rows['car_price'] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div></div></div>";
    }
?>
