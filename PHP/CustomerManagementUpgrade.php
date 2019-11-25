<?php
    include "Db_connexion.php";
    $id = $_GET['user_id'];

    $sql = "UPDATE user SET user_role='admin' WHERE user_id=" . $id; //update customer role
    mysqli_query($con, $sql);
    if (mysqli_affected_rows($con)<=0){
        return "error";
    }

?>