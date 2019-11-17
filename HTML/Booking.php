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
                <div class="form-booking">
                    <div>
                        <label>Type of car:</label>
                        <select name="car_type" id="booking_type_list">
                            <option value="All">All</option>
                            <option value="Car">Car</option>
                            <option value="Special">Special</option>
                            <option value="Truck">Truck</option>
                        </select>
                    </div>
                    <div>
                        <label>Pickup date:</label>
                        <input type="date" name="pickup_date" id="booking_pickup_date">

                    </div>
                    <div>
                        <label>Return date:</label>
                        <input type="date" name="return_date" id="booking_return_date">
                    </div>
                    <div>
                        <a id="button_booking" onclick="urlConstruct()">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="../JS/navbar.js"></script>
<script>
    function urlConstruct() {
        let list = document.getElementById("booking_type_list");
        let selectedOption = list.options[list.selectedIndex].value;
        let pickup_date = document.getElementById("booking_pickup_date");
        pickup_date = pickup_date.value;
        let return_date = document.getElementById("booking_return_date");
        return_date = return_date.value;
        let url = "SelectionCar.php?car_type=" + selectedOption + "&pickup_date=" + pickup_date + "&return_date=" + return_date;


        if ((return_date === "") || (pickup_date === "")){
            alert("You must select pickup date and return date.")
        }
        else{
            let link = document.getElementById("button_booking");
            link.setAttribute("href", url);
        }
    }
</script>
</body>
</html>