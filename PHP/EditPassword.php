<?php
    session_start();
    include "Db_connexion.php";

    $uid = $_SESSION['user_id'];
    $previous = md5($_POST['pwd_previous']);
    $new = md5($_POST['pwd_new']);
    $confirm = md5($_POST['pwd_confirm']);

    //get old pwd
    $sql = "SELECT * FROM user WHERE user_id = $uid";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0){
        die("<script> alert('No data from database');</script>");
    }
    $row = mysqli_fetch_array($result);
    $pwd_bd = $row['user_password'];

//check if old password = $previous
    if ($pwd_bd === $previous){
        if ($new === $confirm){
            echo $uid . " " . $previous . " " . $new . " " .  $confirm . " " . $pwd_bd;
            $sql = "UPDATE user SET " .
                "user_password = '$confirm' WHERE user_id = $uid";
            mysqli_query($con, $sql);

            if(mysqli_affected_rows($con)<=0)
            {
                die ("<script>alert('Cannot update data!');window.location.href='../HTML/MyProfile.php';</script>");
            }else{
                die("<script>alert('Data updated!'); window.location.href='../HTML/MyProfile.php';</script>");
            }
        }
        else{
            die ("<script>alert('Confirm password has to be the same as new'); window.location.href='../HTML/MyProfile.php';</script>");
        }
    }
    else{
        die("<script>alert('Bad password'); window.history.go(-1);</script>");
    }

?>