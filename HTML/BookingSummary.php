<?php
session_start();
include "../PHP/BookingSelectionCar.php"
?>
<!DOCTYPE html>
<html lang="en" xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Booking Summary</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/BookingSummary.css">
    <link rel="stylesheet" href="../CSS/Text.css">
    <link rel="stylesheet" href="../CSS/Button.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <?php
    //Include navbar
    include("Navbar.php");
    ?>

    <main>
        <div class="summary-car">
            <h2> NOM DE LA VOITURE </h2>

            <div class="div-flex">
                <div class="car-info">
                    <table style="width:100%">
                        <tr>
                            <td class="test"><i class="material-icons">perm_identity</i></td>
                            <td><p><?php echo $_SESSION['car_nb_seats'] ?></p></td>
                        </tr>
                        <tr>
                            <td><i class="material-icons">local_gas_station</i></td>
                            <td><p>icon nb doors</p></td>
                        </tr>
                        <tr>
                            <td><i class="material-icons">local_gas_station</i></td>
                            <td><p>Max fuel</p></td>
                        </tr>
                    </table>
                </div>
                <div class="car-included">
                    <table style="width:100%">
                        <tr>
                            <td><i class="material-icons">done</i></td>
                            <td><p>Free cancellation</p></td>
                        </tr>
                        <tr>
                            <td><i class="material-icons">done</i></td>
                            <td><p>Insurance</p></td>
                        </tr>
                        <tr>
                            <td><i class="material-icons">done</i></td>
                            <td><p>Theft protection</p></td>
                        </tr>
                    </table>
                </div>
                <div class="car-image">
                </div>
            </div>
        </div>


        <div class="summary-driver">
            <h2>Driver details</h2>
            <table class="summary-driver-table">
                <tr>
                    <td><p>First name:</p></td>
                    <td><p><?php echo $_SESSION['user_first_name'] ?></p></td>
                </tr>
                <tr>
                    <td><p>Last name:</p></td>
                    <td> <p><?php echo $_SESSION['user_last_name'] ?></p></td>
                </tr>
                <tr>
                    <td><p>Email:</p></td>
                    <td><p><?php echo $_SESSION['user_email'] ?></p></td>
                </tr>
            </table>
        </div>

        <div class="summary-booking">
            <h2>Booking summary</h2>
            <table class="summary-driver-table">
                <tr>
                    <td><p>Pick up date:</p></td>
                    <td><p><?php echo $_GET['pickup_date'] ?></p></td>
                </tr>
                <tr>
                    <td><p>Return date:</p></td>
                    <td><p><?php echo $_GET['return_date'] ?></p></td>
                </tr>
                <tr>
                    <td><p>Location:</p></td>
                    <td><p>Asia Pacific University</p></td>
                </tr>
                <tr>
                    <td><p>Total price (RM):</p></td>
                    <td><p><?php include_once "../PHP/BookingSelectionCar.php"; echo getPrice(); ?></p></td>
                </tr>
            </table>
        </div>
        <form action="../PHP/InsertBooking.php" method="post">
            <input type="submit" value="Book">
        </form>
    </main>

<script src="../JS/navbar.js"></script>
</body>
</html>