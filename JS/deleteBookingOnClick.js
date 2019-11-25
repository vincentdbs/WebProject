function deleteBooking(str){
    if (confirm("Do you really want to delete this booking ?")) { //do php in background and display alert when finish
        let xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("The booking has been deleted !");
                window.open("../HTML/BookingHistory.php", "_self");
            }
        };
        xhttp.open("GET", "../PHP/BookingHistoryDelete.php?booking_id="+ str, true);
        xhttp.send();
    }
}