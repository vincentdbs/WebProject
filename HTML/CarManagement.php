<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header('location: ConnexionPage.php');
}
elseif ($_SESSION['user_role'] == 'user'){
    header('location: HomePage.php');
}

?>
<!DOCTYPE html>
<html lang="en" xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Customer Management</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/All.css">
    <link rel="stylesheet" href="../CSS/CarManagement.css">
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
    <div class="result">
        <?php
        include_once "../PHP/CarManagementGet.php";
        ?>
    </div>
</main>

<script src="../JS/navbar.js"></script>
<script src="../JS/deteleCarOnClick.js"></script>
</body>
</html>