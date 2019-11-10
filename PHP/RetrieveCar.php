<?php
    include("Db_connexion.php");
    $sql = "SELECT * FROM car";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0){
        die("<script> alert('No data from database');</script>");
    }

    while($rows = mysqli_fetch_array($result)){
        echo "<div class=\"card-column\">";
        echo "<div class=\"card-content\">";
        echo "<div class=\"content\">";
        echo "<img src=\"../Image/photography-of-blue-wagon-audi-1035108.jpg\" class=\"card-car-image\">";
        echo "<p>Seats:" . $rows['car_nb_seats'] . "</p>";
        echo "<p>Doors: </p>";
        echo "<p>Price: </p>";
        echo "</div> </div> </div>";
    }
?>