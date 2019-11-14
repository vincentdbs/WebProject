<?php
    session_start();

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
    <link rel="stylesheet" href="../CSS/CustomerManagement.css">
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
    <div>
        <table class="table-user">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>On loan ?</td>
                </tr>
            </thead>
            <?php include("../PHP/GetCustomerManagement.php")?>
        </table>
    </div>
</main>

<script src="../JS/navbar.js"></script>
</body>
</html>