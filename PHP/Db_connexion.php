<?php
    $server = 'localhost';
    $phpmyadmin_username = 'root';
    $phpmyadmin_password = '';
    $dbname = 'web_project';
    $con = mysqli_connect($server, $phpmyadmin_username, $phpmyadmin_password, $dbname);
    if (mysqli_connect_errno()){
        echo "Fail to connect to dabatabse : " . mysqli_connect_error();
    }

