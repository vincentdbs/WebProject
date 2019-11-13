<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/Booking.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
</head>
<body>
    <?php
    include "Navbar.php";
    ?>

    <main>
        <div class="main-hero-image image">
            <div class="center-booking">
                <form action="../PHP/BookingDate.php" method="post" class="form-booking">
                    <div>
                        <label>Type of car:</label>
                        <select name="car_type">
                            <option value="All">All</option>
                            <option value="Car">Car</option>
                            <option value="Special">Special</option>
                            <option value="Truck">Truck</option>
                        </select>
                    </div>
                    <div>
                        <label>Pickup date:</label>
                        <input type="date" name="pickup_date">

                    </div>
                    <div>
                        <label>Return date:</label>
                        <input type="date" name="return_date">
                    </div>
                    <div>
                        <input type="submit" id="button_booking" class="button-booking" value="Search">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="../JS/navbar.js"></script>
</body>
</html>