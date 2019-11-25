<?php


    function retrieveCar(){ //retrieve car depending user filter
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
            if($_GET['car_type'] != "All"){
                $sql = $sql . " WHERE car_type ='" .  $_GET['car_type'] . "'";
            }
        }
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) <= 0){
            die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
        }

        echo "<div class=\"car-container\">";
        while($rows = mysqli_fetch_array($result)){
            if(isCarAvaible($rows['car_id'], $rows['car_stocks'])){
                echo "<div class=\"card-column\">";
                echo "<div class=\"card-content\">";
                echo "<div class=\"content\">";
                echo "<img src='" . $rows['car_photo'] . "' class=\"card-car-image\">";
                echo "<h3>" . $rows['car_name'] . "</h3>";
                echo "<p class='little brand'>" . $rows['car_brand'] . "</p>";
                echo "<table>";
                echo "<tr>";
                echo "<td><img src='../Icon/car_seats.png' class='icon'> </td>";
                echo "<td>" . $rows['car_nb_seats'] . "</td>";
                echo "<td><img src='../Icon/car_doors.png' class='icon'> </td>";
                echo "<td>" . $rows['car_nb_doors'] . "</td>";
                echo "<td><img src='../Icon/coin.png' class='icon'> </td>";
                echo "<td>" . $rows['car_price'] . "/day</td>";
                echo "</tr>";
                echo "</table>";
                echo "<a class='link-booking-summary' href='BookingSummary.php?car_id=" .  $rows['car_id'] . "&pickup_date=" . $_GET['pickup_date'] . "&return_date=" . $_GET['return_date'] . "&car_nb_seats=" . $rows['car_nb_seats'] . "&car_nb_doors=" . $rows['car_nb_doors'] . "&car_name=" . $rows['car_name'] . "&car_price=" . $rows['car_price']. "&car_photo=". $rows['car_photo'] ."'>Book</a>";
                echo "</div> </div> </div>";
            }
        }
        echo "</div>";
    }

    function getActualURL(){
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $link = "https";
        else
            $link = "http";

        $link .= "://";

        $link .= $_SERVER['HTTP_HOST'];

        $link .= $_SERVER['REQUEST_URI'];

        echo $link;
    }

    function isCarAvaible($id, $stock){
        include("Db_connexion.php");
        $pickup = $_GET['pickup_date'];
        $return = $_GET['return_date'];
        $sql = "SELECT * FROM booking WHERE booking_car_id=" . $id;
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) <= 0){
            return true;
        }
        else{
            $count = 0;
            while ($rows = mysqli_fetch_array($result)){
                if (!(($return < $rows['booking_pickup_date']) || ($pickup > $rows['booking_return_date']))){
                    $count++;
                }
            }
            if ($count < $stock){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>


