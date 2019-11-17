<?php
    include "Db_connexion.php";

    $target_dir = "../Image/";
    $target_file = $target_dir . basename($_FILES["car_photo"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["car_photo"]["tmp_name"]);



    if($check == false)
    {
        echo "<script>alert('File is not an image.);</script>";
        die("<script>window.history.go(-1);</script>");
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
    {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.);</script>";
        die("<script>window.history.go(-1);</script>");
    }
    if (!move_uploaded_file($_FILES["car_photo"]["tmp_name"], $target_file)) {
        echo "<script>alert('Unable to upload photo.);</script>";
        die("<script>window.history.go(-1);</script>");
    }

    $car_name = $_POST['car_name'];
    $car_brand = $_POST['car_brand'];
    $car_nb_door = $_POST['car_nb_door'];
    $car_nb_seats= $_POST['car_nb_seat'];
    $car_price = $_POST['car_price'];
    $car_stock = $_POST['car_stock'];
    $car_type = $_POST['car_type'];

    $sql = "INSERT INTO car(car_name, car_nb_doors, car_nb_seats, car_stocks, car_price, car_brand, car_type, car_photo)
            VALUES
            ('$car_name', '$car_nb_door', '$car_nb_seats', '$car_stock', '$car_price', '$car_brand', '$car_type', '$target_file')";

    if (!mysqli_query($con, $sql)) {
        die("Error : " . mysqli_error($con));
    }

    mysqli_close($con);
    echo ("<script>window.history.go(-1);</script>");
?>