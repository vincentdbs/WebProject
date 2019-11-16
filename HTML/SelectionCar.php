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
        <div class="center">
            <form action="" method="post" class="form-booking">
                <div>
                    <label>Pickup date:</label>
                    <input type="date" value="<?php echo $_GET['pickup_date']; ?>">

                </div>
                <div>
                    <label>Return date:</label>
                    <input type="date" value="<?php echo $_GET['return_date']; ?>">
                </div>
                <div>
                    <input type="submit" value="Search" class="button-booking" id="button_selection">
                </div>
            </form>
        </div>
        <div class="selection">
            <h2>Choose your car :</h2>
            <form action="<?php  include_once "../PHP/RetrieveCar.php"; getActualURL();?>" method="post">
                <select name="type">
                    <option value="All">All</option>
                    <option value="Car">Car</option>
                    <option value="Truck">Truck</option>
                    <option value="Special">Special</option>
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