<?php
    session_start();
    if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
        header('location: ConnexionPage.php');
    }
    else if ($_SESSION['user_id'] == 'user'){
        header('location: HomePage.php');
    }
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
            <form action="../PHP/InsertCar.php" method="post" class="form-add-car" enctype="multipart/form-data">
                <h2>Add a car</h2>

                <div class="div-input-label">
                    <label class="labelToTop">Car name:</label>
                    <input type="text" name="car_name" required>
                </div>

                <label>Brand:</label>
                <input type="text" name="car_brand" required>
                <label>Number of doors:</label>
                <input type="text" name="car_nb_door" required>
                <label>Number of seats:</label>
                <input type="text" name="car_nb_seat" required>
                <label>Price: </label>
                <input type="text" name="car_price" required>
                <label>Stock available: </label>
                <input type="text" name="car_stock" required>
                <label>Type of car:</label>
                <select name="car_type" required>
                    <option>Car</option>
                    <option>Special</option>
                    <option>Truck</option>
                </select>
                <input type="file" name="car_photo" id="car_photo" required>
                <button type="submit" class="button-booking">Add</button>
            </form>
        </div>
    </div>
</main>
<script src="../JS/navbar.js"></script>
</body>
</html>