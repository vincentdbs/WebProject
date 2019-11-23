<div class="header">
    <img src="../Icon/car.png" id="logo_car">
    <ol class="header_main-menu" id="links">
        <?php
            if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
                echo "<li><a href=\"ConnexionPage.php\">Login</a></li>";
            }
            else{
                echo "<li><a href='../PHP/Logout.php'>Logout</a></li>";
                echo "<li><a href='../HTML/MyProfile.php'>Profile</a></li>";
            }
        ?>
        <?php
            if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == "admin"){
                echo "<li><a href='../HTML/CustomerManagement.php'>Users</a></li>";
                echo "<li><a href='../HTML/AddCar.php'>Add</a></li>";
                echo "<li><a href='../HTML/CarManagement.php'>Car</a></li>";
            }
            else{
                echo "<li><a href='../HTML/Booking.php'>Rent</a></li>";
            }
        ?>
        <li><a href="HomePage.php">Home</a></li>
    </ol>
    <a class="icon" onclick="displayMenu()"><img src="../Icon/burger_menu.png" id="burger_menu"></a>
</div>