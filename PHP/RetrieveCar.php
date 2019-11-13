<?php
    include("Db_connexion.php");
    $sql = "SELECT * FROM car";

    if ((isset($_POST['type']))){

        $type = $_POST['type'];
        $nb_seats = $_POST['nb_seats'];



        if (($nb_seats!="") || ($type != "All")) {
            $sql = $sql . " WHERE";
        }
        if ($type != "All"){
            $sql = $sql . " (car_type = '$type')";
        }
        if (($nb_seats!="") && ($type != "All")) {
            $sql = $sql . " AND (car_nb_seats = $nb_seats)";
        }
        else if ($nb_seats != ""){
            $sql = $sql . " (car_nb_seats = $nb_seats)";
        }

        $_SESSION['car_nb_seats'] = $nb_seats;
        $_SESSION['car_type'] = $type;
    }
    else{
        if($_SESSION['car_type'] != "All"){
            $sql = $sql . " WHERE car_type ='" .  $_SESSION['car_type'] . "'";
        }
    }

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0){
        die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
    }

    while($rows = mysqli_fetch_array($result)){
        echo "<div class=\"card-column\">";
        echo "<div class=\"card-content\">";
        echo "<div class=\"content\">";
        echo "<img src=\"../Image/photography-of-blue-wagon-audi-1035108.jpg\" class=\"card-car-image\">";
    //    echo "<p>Seats: " . $rows['car_nb_seats'] . "</p>";
    //    echo "<p>Doors: " . $rows['car_nb_doors'] . "</p>";
    //    echo "<p>Price: " . $rows['car_price'] . "</p>";
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
        //TODO changer la reference de l'image depuis la bdd
        echo "<img src='../Icon/edit.png' class='icon-slide-up'>";
        echo "</div> </div> </div>";
    }
?>


