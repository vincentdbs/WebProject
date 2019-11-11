<?php
    session_start();
    include "Db_connexion.php";

    $uid = $_SESSION['user_id'];
    $last_name = $_POST['lastName'];
    $first_name = $_POST['firstName'];
    $email = $_POST['email'];


    $sql = "UPDATE user SET " .
        "user_first_name = '$first_name', ".
        "user_last_name = '$last_name', ".
        "user_email = '$email' WHERE user_id = $uid";

    mysqli_query($con, $sql);

    if(mysqli_affected_rows($con)<=0)
    {
        echo "<script>alert('Cannot update data!');";
        die ("window.location.href='../HTML/MyProfile.php';</script>");
    }else{
        $_SESSION['user_last_name'] = $last_name;
        $_SESSION['user_first_name'] = $first_name;
        $_SESSION['user_email'] = $email;
        echo "<script>alert('Data updated!1' .  $first_name );</script>";
        echo "<script>window.location.href='../HTML/MyProfile.php';</script>";
    }
?>
