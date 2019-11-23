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
    <link rel="icon" href="../Icon/car.png">
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
                <table>
                    <tr>
                        <td><label class="labelToTop">Car name</label></td>
                        <td><label>Brand</label></td>
                    </tr>
                    <tr>
                        <td><input class="input-text" type="text" name="car_name" required></td>
                        <td><input class="input-text" type="text" name="car_brand" required></td>
                    </tr>
                    <tr>
                        <td><label>Number of doors</label></td>
                        <td><label>Number of seats</label></td>
                    </tr>
                    <tr>
                        <td><input class="input-text" type="number" min="0" name="car_nb_door" required></td>
                        <td><input class="input-text" type="number" min="1" name="car_nb_seat" required></td>
                    </tr>
                    <tr>
                       <td><label>Price</label></td>
                       <td><label>Stock available</label></td>
                    </tr>
                    <tr>
                        <td><input class="input-text" min="1" type="number" name="car_price" required></td>
                        <td><input class="input-text" min="1" type="number" name="car_stock" required></td>
                    </tr>
                    <tr>
                        <td><label>Type of car</label></td>
                        <td><label>Photo</label></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="car_type" required>
                                <option>Car</option>
                                <option>Special</option>
                                <option>Truck</option>
                            </select>
                        </td>
                        <td><input type="file" name="car_photo" id="car_photo" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" class="button-booking">Add</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</main>
<script src="../JS/navbar.js"></script>
</body>
</html>