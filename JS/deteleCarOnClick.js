function deleteCar(str){
    if (confirm("Do you really want to delete this car ?")) { //delete car on click of the bin item
        let xhttp;
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
}

function editCar(id) {
    let url = "../HTML/EditCarPage.php?car_id=" + id;
    window.open(url,"_self")
}