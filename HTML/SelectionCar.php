<?php
    session_start();
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
        <form action="../HTML/SelectionCar.php" method="post">
            <select name="type">
                <option value="">Vehicle type</option>
                <option value="All">All</option>
                <option value="Car">Car</option>
                <option value="Truck">Truck</option>
                <option value="Special">Special</option>
            </select>
            <select name="nb_doors">
                <option>Number of doors</option>
                <option value="All">All</option>
                <option >3</option>
                <option>5</option>
                <option>7</option>
            </select>
            <select name="nb_seats">
                <option>Number of seats</option>
                <option>All</option>
                <option>4</option>
                <option>5</option>
                <option>7</option>
                <option>8+</option>
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