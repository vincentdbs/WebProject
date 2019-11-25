<?php
    session_start(); //logout the user by destroying the session
    session_destroy();
    header('location: ../HTML/HomePage.php');
?>
