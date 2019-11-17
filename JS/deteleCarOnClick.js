function callPhp(str){
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseURL);
        }
    };
    xhttp.open("GET", "../PHP/CarManagementDelete.php?car_id="+ str, true);
    xhttp.send();
}