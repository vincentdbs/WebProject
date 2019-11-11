<?php
    include("Db_connexion.php");
    $sql = "SELECT * FROM car";
    if (isset($_POST['type'])){
        $type = $_POST['type'];
        $nb_seats = $_POST['nb_seats'];
        $nb_doors = $_POST['nb_doors'];
        if(($type != "All") && ($type != "Vehicle type")){
            $sql = $sql . " WHERE car_type='$type'";
        }
        if(($nb_seats != "All") && ($nb_seats != "Number of seats")){
            if ($sql != "SELECT * FROM car"){
                $sql = $sql . " AND car_nb_seats='$nb_seats'";
            }
            else{
                $sql = $sql . " WHERE car_nb_seats='$nb_seats'";
            }
        }
        if(($nb_doors != "All") && ($nb_doors != "Number of doors")){
            if ($sql != "SELECT * FROM car"){
                $sql = $sql . " AND car_nb_doors='$nb_doors'";
            }
            else{
                $sql = $sql . " WHERE car_nb_doors='$nb_doors'";
            }
        }
    }

    echo "<p> $sql </p>";

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