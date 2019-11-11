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
        die ("window.location.href='edit.php';</script>");
    }else{
        echo "<script>alert('Data updated!');</script>";
        echo "<script>window.location.href='MyProfile.php=$uid';</script>";
    }
?>
