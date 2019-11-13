<?php
    session_start();


    if ((!(isset($_SESSION['car_type'])) || !(isset($_SESSION['return_date']))) || (!(isset($_SESSION['pickup_date'])))){ //if data unset
        header('location: ../HTML/Booking.php');
    }
    if ((($_SESSION['car_type'] == "") || ($_SESSION['return_date'] == "")) || ($_SESSION['pickup_date'] == "")){ //if data not select
        header('location: ../HTML/Booking.php');
    }

//    echo $_SESSION['car_type'] . " : " . $_SESSION['return_date'] . " : " . $_SESSION['pickup_date'];


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
        <!--            TODO completer avec le file php-->
        <div class="center">
            <form action="" method="post" class="form-booking">
                <div>
                    <label>Pickup date:</label>
                    <input type="date" value="<?php echo $_SESSION['pickup_date']; ?>">

                </div>
                <div>
                    <label>Return date:</label>
                    <input type="date" value="<?php echo $_SESSION['return_date']; ?>">
                </div>
                <div>
                    <input type="submit" value="Search" class="button-booking" id="button_selection">
                </div>
            </form>
        </div>
        <div class="selection">
            <h2>Choose your car :</h2>
            <form action="../HTML/SelectionCar.php" method="post">
                <select name="type">
                    <option value="">Vehicle type</option>
                    <option <?php if ($_SESSION['car_type'] == "All"){ echo 'selected';} ?> value="All">All</option>
                    <option <?php if ($_SESSION['car_type'] == "Car"){ echo 'selected';} ?> value="Car">Car</option>
                    <option <?php if ($_SESSION['car_type'] == "Truck"){ echo 'selected';} ?> value="Truck">Truck</option>
                    <option <?php if ($_SESSION['car_type'] == "Special"){ echo 'selected';} ?> value="Special">Special</option>
                </select>
                <select name="nb_seats">
                    <?php if((isset($_SESSION['car_nb_seats'])) && ($_SESSION['car_nb_seats'] == 4)){ echo 'fsdffd';} ?>
                    <option value="">Number of seats</option>
                    <option <?php if((isset($_SESSION['car_nb_seats'])) && ($_SESSION['car_nb_seats'] == "All")){ echo 'selected';} ?>  value="">All</option>
                    <option <?php if((isset($_SESSION['car_nb_seats'])) && ($_SESSION['car_nb_seats'] == "4")){ echo 'selected';} ?>  value="4">4</option>
                    <option <?php if((isset($_SESSION['car_nb_seats'])) && ($_SESSION['car_nb_seats'] == "5")){ echo 'selected';} ?> value="5">5</option>
                    <option <?php if((isset($_SESSION['car_nb_seats'])) && ($_SESSION['car_nb_seats'] == "7")){ echo 'selected';} ?> value="7">7</option>
                </select>
                <input type="submit" name="search" value="Search" class="button-search little">
            </form>
        </div>
        <div class="result">
            <?php
            include "../PHP/RetrieveCar.php";
            ?>
        </div>
    </main>

<script src="../JS/navbar.js"></script>
</body>
</html>