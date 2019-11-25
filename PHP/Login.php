<?php
    session_start();
    include "Db_connexion.php";

    $user_email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "Select * from user where user_email = '".$user_email."' && user_password = '".md5($password)."'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) <=0 ){
        die("<script>alert('Wrong username or password !'); window.history.go(-1);</script>");
    }
    else{
        while ($row = mysqli_fetch_array($result)){
            $_SESSION['user_id'] = $row['user_id']; //use session to store user data
            $_SESSION['user_first_name'] = $row['user_first_name'];
            $_SESSION['user_last_name'] = $row['user_last_name'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_role'] = $row['user_role'];
        }
        header('location: ../HTML/HomePage.php');
    }
?>
