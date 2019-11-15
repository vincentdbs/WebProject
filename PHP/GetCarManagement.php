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
        echo "<table>";
        echo "<tr>";
        echo "<td><p>Seats:</p></td>";
        echo "<td><p>" . $rows['car_nb_seats'] . "</p></td>";
        echo "<td><p>Doors:</p></td>";
        echo "<td><p>" . $rows['car_nb_doors'] . "</p></td>";
        echo "<td><p>Price:</p></td>";
        echo "<td><p>" . $rows['car_price'] . "</p></td>";
        echo "</tr>";
        echo "</table>";
        echo "</div></div></div>";
    }
?>
