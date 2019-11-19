<?php
    session_start();

    if ((!(isset($_GET['car_type'])) || !(isset($_GET['return_date']))) || (!(isset($_GET['pickup_date'])))){ //if data unset
        header('location: ../HTML/Booking.php');
    }
    if ((($_GET['car_type'] == "") || ($_GET['return_date'] == "")) || ($_GET['pickup_date'] == "")){ //if data not select
        header('location: ../HTML/Booking.php');
    }
    if (((($_GET['car_type'] != "All") && ($_GET['car_type'] != "Car")) && ($_GET['car_type'] != "Special")) && ($_GET['car_type'] != "Truck")){
        header('location: ../HTML/Booking.php');
    }

    if($_SESSION['user_role'] == 'admin'){
        header('location: HomePage.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Select car</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/SelectionCar.css">
    <link rel="stylesheet" href="../CSS/Booking.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
</head>
<body>

    <?php
    //Include navbar
    include("Navbar.php");
    ?>

    <main>
        <div class="recap">
            <div class="step">
                <h3>Step 1 : Choose your date</h3>
                <p>Pickup date : <?php echo $_GET['pickup_date']?></p>
                <p>Return date : <?php echo $_GET['return_date']?></p>
            </div>
            <div class="step">
                <h3>Step 2 : Choose your car</h3>
                <p>Pickup date : <?php echo $_GET['pickup_date']?></p>
                <p>Return date : <?php echo $_GET['return_date']?></p>
            </div>
            <div class="step">
                <h3>Step 3 : Finalize your order</h3>
            </div>
        </div>
        <div class="selection">
            <h2>Choose your car :</h2>
            <form action="<?php  include_once "../PHP/RetrieveCar.php"; getActualURL();?>" method="post">
                <select name="type">
                    <option value="All" <?php if($_GET['car_type'] === 'All'){ echo "selected='true'";} ?>>All</option>
                    <option value="Car" <?php if($_GET['car_type'] == 'Car'){ echo "selected='true'";} ?>>Car</option>
                    <option value="Truck" <?php if($_GET['car_type'] == 'Truck'){ echo "selected='true'";} ?>>Truck</option>
                    <option value="Special" <?php if($_GET['car_type'] == 'Special'){ echo "selected='true'";} ?>>Special</option>
                </select>
                <select name="nb_seats">
                    <option value="">Number of seats</option>
                    <option value="">All</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>
                <input type="submit" name="search" value="Search" class="button-search little">
            </form>
        </div>
        <div class="result">
            <?php
            include_once "../PHP/RetrieveCar.php"; retrieveCar();
            ?>
        </div>
    </main>

<script src="../JS/navbar.js"></script>
</body>
</html>