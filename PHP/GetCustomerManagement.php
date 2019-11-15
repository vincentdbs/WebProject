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

        $sql_bis = 'SELECT * FROM booking where booking_user_id=' . $rows['user_id'];
        $result_bis = mysqli_query($con, $sql_bis);
        if (mysqli_num_rows($result_bis) <= 0){
            echo "<td>No</td>";
            echo "<td></td>";
        }
        else{
            echo "<td>Yes</td>";
            echo "<td><i class='material-icons' onclick='displayDiv(this)'>keyboard_arrow_down</img></td>";
        }

        echo "</tr>";
//        echo "<tr><td><div style='height: 100px'><p>dfsmjkfds dsml fklsf jsdj flksdf </p> </div></td></tr>";

        while ($rows = mysqli_fetch_array($result_bis)){
            echo "<tr style='display: none'><td colspan='6'><div>";
            echo "<p>dsfsdf</p>";
            echo "</div></td></tr>";
        }
    }
?>

<!--<img src="../Image/fiat500.jpg">-->
<!--<div>-->
<!--    <p>fdjks</p>-->
<!--    <p>fdjks</p>-->
<!--    <p>fdjks</p>-->
<!--    <p>fdjks</p>-->
<!--</div>-->
