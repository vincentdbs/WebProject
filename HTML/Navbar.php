<div class="header">
    <img src="../Icon/logo_voiture.png" id="logo_car">
    <ol class="header_main-menu" id="links">
        <?php
            if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
                echo "<li><a href=\"ConnexionPage.php\">Login</a></li>";
            }
            else{
                echo "<li><a href=\"../PHP/Logout.php\">Logout</a></li>";
                echo "<li><a href=\"MyProfile.php\">Profile</a></li>";
            }
        ?>

        <li><a href="SelectionCar.php">Rent</a></li>
        <li><a href="HomePage.php">Home</a></li>
    </ol>
    <a class="icon" onclick="displayMenu()"><img src="../Icon/burger_menu.png" id="burger_menu"></a>
</div>