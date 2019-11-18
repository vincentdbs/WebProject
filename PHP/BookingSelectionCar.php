<?php
    if (!parameterValid()){
        header('location: SelectionCar.php');
    }
    else if(!isset($_SESSION['user_id'])){
        header('location: ConnexionPage.php');
    }

    $pickup_date = $_GET['pickup_date'];
    $return_date = $_GET['return_date'];

    $car_info = getCarInfo();


    function parameterValid(){
        if ((((isset($_GET['car_id'])) && (isset($_GET['pickup_date']))) && (isset($_GET['return_date'])))){
            return true;
        }
        else{
            return false;
        }
    }

    function getPrice(){
        $pickup_date = $_GET['pickup_date'];
        $return_date = $_GET['return_date'];

        $date1 = date_create($pickup_date);
        $date2 = date_create($return_date);
        $nb_day = date_diff($date1,$date2);
        $nb_day = $nb_day->format("%a");
        $nb_day = number_format($nb_day) ;
        $price = $_GET['car_price'];

        $price *= $nb_day;
        $_SESSION['booking_price'] = $price;
        return $price;
    }

    function getCarInfo(){
        include "Db_connexion.php";
        $info = array();
        $sql = "SELECT * FROM car WHERE car_id='" . $_GET['car_id'] . "'";
        $result = mysqli_query($con, $sql);
        while($rows = mysqli_fetch_array($result)){
            array_push($info, $rows['car_id']);
            array_push($info, $rows['car_name']);
            array_push($info, $rows['car_nb_doors']);
            array_push($info, $rows['car_nb_seats']);
            array_push($info, $rows['car_stocks']);
            array_push($info, $rows['car_price']);
            array_push($info, $rows['car_brand']);
            array_push($info, $rows['car_type']);
        }
        return $info;
    }

?>