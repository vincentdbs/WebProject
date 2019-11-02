<?php
    include('Connexion.php');

    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "INSERT INTO user(user_first_name, user_last_name, user_email, user_password)
            VALUES
            ('$first_name', '$last_name', '$email', '$pwd')";

    if (!mysqli_query($con, $sql)) {
        die("Error : " . mysqli_error($con));
    }

    mysqli_close($con);
?>
