<?php
    include "Db_connexion.php";

    $sql = 'SELECT * FROM user WHERE user_role="user"';
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) <= 0){
        die("<p> Sorry, we do not find anything that correspond to your research ! </p>");
    }


    while($rows = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $rows['user_id'] . "</td>";
        echo "<td>" . $rows['user_first_name'] . "</td>";
        echo "<td>" . $rows['user_last_name'] . "</td>";
        echo "<td>" . $rows['user_email'] . "</td>";
        echo "<td>yes</td>";
        echo "</tr>";
    }
?>
