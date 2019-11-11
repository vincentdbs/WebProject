<?php
include("Db_connexion.php");
$sql = "SELECT * FROM car";

if ((isset($_POST['type']))){

    $type = $_POST['type'];
    $nb_seats = $_POST['nb_seats'];

    if (($type!="") || ($nb_seats!="")) {
        $sql = $sql . " WHERE";
    }
    if ($type!="") {
        // On a un type de saisi
        $sql = $sql . " (car_type = '$type')";
    }
    if (($nb_seats!="") && ($type != "")) {
        $sql = $sql . " AND (car_nb_seats = $nb_seats)";
    }
    else if ($nb_seats != ""){
        $sql = $sql . " (car_nb_seats = $nb_seats)";
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
    echo "<p>Seats: " . $rows['car_nb_seats'] . "</p>";
    echo "<p>Doors: " . $rows['car_nb_doors'] . "</p>";
    echo "<p>Price: " . $rows['car_price'] . "</p>";
    echo "</div> </div> </div>";
}
?>