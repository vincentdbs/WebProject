function callPhp(str){
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("The car has been deleted !");
            window.open("../HTML/CarManagement.php", "_self");
        }
    };
    xhttp.open("GET", "../PHP/CarManagementDelete.php?car_id="+ str, true);
    xhttp.send();
}