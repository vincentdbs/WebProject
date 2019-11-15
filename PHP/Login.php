<?php
    session_start();
    include "Db_connexion.php";

    $user_email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "Select * from user where user_email = '".$user_email."' and user_password = '".$password."'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)<=0)
    {
        $sql = "Select * from users where user_email = '".$user_email."' and user_password = '".$password."'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)<=0)
        {
            echo "<script>alert('Wrong username / password !Please Try Again!');";
            die("window.history.go(-1);</script>");
        }
    }
    if($row=mysqli_fetch_array($result))
    {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_first_name'] = $row['user_first_name'];//use session
        $_SESSION['user_last_name'] = $row['user_last_name'];//use session
        $_SESSION['user_email'] = $row['user_email'];//use session
        $_SESSION['user_role'] = $row['user_role'];
    }
    if($_SESSION['user_role']==="admin")
    {
        $name = $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'];
        echo "<script>window.location.href='../HTML/MyProfile.php';</script>";
    }
    else if($_SESSION['user_role']==="user")
    {
        echo "window.location.href='../HTML/HomePage.php';</script>";
    }
?>

<!-- TODO crypter les mots de passe -->
