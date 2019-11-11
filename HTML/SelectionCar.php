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
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
</head>
<body>

<?php
    //Include navbar
    include("Navbar.html");
?>

<main>
    <!--            TODO completer avec le file php-->
    <div class="center">
        <form action="" method="post" class="form-booking">
            <h2>Your order</h2>
            </select>
            <label>Pickup date</label>
            <input type="date">
            <label>Return date</label>
            <input type="date">
            <button type="submit" class="button-booking">Search</button>
        </form>
    </div>
    <div class="selection">
        <h2>Choose your car :</h2>
        <div>
            <select>
                <option>Vehicule type</option>
                <option>Car</option>
                <option>Truck</option>
                <option>Special</option>
            </select>
            <select>
                <option>Number of doors</option>
                <option>3</option>
                <option>5</option>
                <option>7</option>
            </select>
            <select>
                <option>Number of seats</option>
                <option>4</option>
                <option>5</option>
                <option>7</option>
                <option>8+</option>
            </select>
        </div>
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