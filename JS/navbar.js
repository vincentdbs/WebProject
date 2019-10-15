function displayMenu() {
    var x = document.getElementById("links");
    if (x.style.display === "block") {
        x.style.display = "none";
        console.log("none")
    } else {
        x.style.display = "block";
        console.log("inlione")
    }
}