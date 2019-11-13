<?php
    if (!parameterValid()){
        header('location: SelectionCar.php');
    }
    else if(!isset($_SESSION['user_id'])){
        header('location: ConnexionPage.php');
    }

    $car_id = $_GET['car_id'];
    $pickup_date = $_GET['pickup_date'];
    $return_date = $_GET['return_date'];
    $price = $_GET['price'];


    function parameterValid(){
        if ((((isset($_GET['car_id'])) && (isset($_GET['pickup_date']))) && (isset($_GET['return_date']))) && (isset($_GET['price']))){
            return true;
        }
        else{
            return false;
        }
    }

    function getPrice(){
        $price = $_GET['price'];
        $pickup_date = $_GET['pickup_date'];
        $return_date = $_GET['return_date'];

        $date1 = date_create($pickup_date);
        $date2 = date_create($return_date);
        $nb_day = date_diff($date1,$date2);
        $nb_day = $nb_day->format("%a");
        $nb_day = number_format($nb_day) * $price;

        return $nb_day;
    }
?>