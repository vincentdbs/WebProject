<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Add car</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/AddCar.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
</head>
<body>
    <?php
    include "../HTML/Navbar.php";
    ?>

<main>
    <div class="main-hero-image image">
        <div class="center">
            <form action="../PHP/InsertCar.php" method="post" class="form-add-car">
                <h2>Add a car</h2>

                <div class="div-input-label">
                    <label class="labelToTop">Car name:</label>
                    <input type="text" name="car_name" required>
                </div>

                <label>Brand:</label>
                <input type="text" name="car_brand">
                <label>Number of doors:</label>
                <input type="text" name="car_nb_door">
                <label>Number of seats:</label>
                <input type="text" name="car_nb_seat">
                <label>Price: </label>
                <input type="text" name="car_price">
                <label>Stock available: </label>
                <input type="text" name="car_stock">
                <label>Type of car:</label>
                <select name="car_type">
                    <option>Car</option>
                    <option>Special</option>
                    <option>Truck</option>
                </select>
                <button type="submit" class="button-booking">Add</button>
            </form>
        </div>
    </div>
</main>

</body>
</html>