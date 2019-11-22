<?php
    include "Db_connexion.php";
    $car_id = $_GET['car_id'];



    $sql = "SELECT * FROM car WHERE car_id=" . $car_id;
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) <= 0){
        echo "error";
    }
    else{
        $row = mysqli_fetch_array($result);
        echo "<div class='img-left'>";
        echo "<img src=". $row['car_photo'] . " class='image-car'></img>";
        echo "</div>";
        echo '<div class="form-right">';
        echo '<h2>Edit the car</h2>';
        echo '<form enctype="multipart/form-data">';
        echo '<table>';
        echo "<tr>";
        echo "<td><label>Car name</label></td>";
        echo "<td><input type=\"text\" class=\"input-text\" name=\"car_name\" required value='". $row['car_name'] ."'></td>";
        echo "</tr><tr>";
        echo "<td><label>Car brand</label></td>";
        echo "<td><input type=\"text\" class=\"input-text\" name=\"car_brand\" required value='". $row['car_brand'] ."'></td>";
        echo "</tr><tr>";
        echo "<td><label>Number of doors</label></td>";
        echo "<td><input type=\"text\" class=\"input-text\" name=\"car_doors\" required value='". $row['car_nb_doors'] ."'></td>";
        echo "</tr><tr>";
        echo "<td><label>Number of seats</label></td>";
        echo "<td><input type=\"text\" class=\"input-text\" name=\"car_seats\" required value='". $row['car_nb_seats'] ."'></td>";
        echo "</tr><tr>";
        echo "<td><label>Price</label></td>";
        echo "<td><input type=\"text\" class=\"input-text\" name=\"car_price\" required value='". $row['car_price'] ."'></td>";
        echo "</tr><tr>";
        echo "<td><label>Photo</label></td>";
        echo "<td><input type=\"file\"  name=\"car_photo\" required></td>";
        echo "</tr><tr>";
        echo "<td><input type=\"submit\" value=\"Save\" class=\"button-save\"></td>";
        echo "</tr>";
    }

 echo '</table></form></div>';

?>