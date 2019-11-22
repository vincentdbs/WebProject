<?php
    include('Db_connexion.php');

    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0){
        while ($rows = mysqli_fetch_array($result)){
            if ($rows['user_email'] == $email){
                echo "<script> alert('This email is already taken !')</script>";
                die("<script>window.location.href='../HTML/CarManagement.php';</script>");
            }
        }
    }

    $sql = "INSERT INTO user(user_first_name, user_last_name, user_email, user_password, user_role)
            VALUES
            ('$first_name', '$last_name', '$email', '". md5($pwd) ."', 'user')";

    if (!mysqli_query($con, $sql)) {
        die("Error : " . mysqli_error($con));
    }

    mysqli_close($con);
    header("location: ../HTML/ConnexionPage.php");
?>
