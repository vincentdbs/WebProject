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
    <title>Edit car</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/EditCar.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
</head>
<body>
<?php
include "../HTML/Navbar.php";
?>

<main>
    <div class="edit-content">
        <div class="img-left">
            <img src="../Image/fiat500.jpg" class="image-car"></img>
            <!-- TODO ajouter des alt à toutes les imahes-->
        </div>
        <div class="form-right">
            <form enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Car name</label></td>
                        <td><input type="text" class="" name="car_name" required></td>
                    </tr>
                    <tr>
                        <td><label>Car brand</label></td>
                        <td><input type="text" class="" name="car_brand" required></td>
                    </tr>
                    <tr>
                        <td><label>Number of doors</label></td>
                        <td><input type="text" class="" name="car_doors" required></td>
                    </tr>
                    <tr>
                        <td><label>Number of seats</label></td>
                        <td><input type="text" class="" name="car_seats" required></td>
                    </tr>
                    <tr>
                        <td><label>Price</label></td>
                        <td><input type="text" class="" name="car_price" required></td>
                    </tr>
                    <tr>
                        <td><label>Photo</label></td>
                        <td><input type="text" class="" name="car_photo" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Save" class="button-save"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</main>
<script src="../JS/navbar.js"></script>
</body>
</html>