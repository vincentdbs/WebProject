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
<!--            TODO completer avec le file php-->
        <div class="main-hero-image image">
            <div class="center">
                <form action="" method="post" class="form-booking">
                    <h2>Your order</h2>
                    <label>Type of car:</label>
                    <select>
                        <option>Select a location</option>
                        <option>Car</option>
                        <option>Special</option>
                        <option>Truck</option>
                    </select>
                    <label>Pickup date</label>
                    <input type="date">
                    <label>Return date</label>
                    <input type="date">
                    <button type="submit" class="button-booking">Search</button>
                </form>
            </div>
        </div>
    </main>

    <script src="../JS/navbar.js"></script>
</body>
</html>