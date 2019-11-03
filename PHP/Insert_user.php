<?php
    include('Db_connexion.php');

    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO user(user_first_name, user_last_name, user_email, user_password, user_role)
            VALUES
            ('$first_name', '$last_name', '$email', '$pwd', 'user')";

    if (!mysqli_query($con, $sql)) {
        die("Error : " . mysqli_error($con));
    }

    mysqli_close($con);
    include '../HTML/HomePage.html';?>
?>
