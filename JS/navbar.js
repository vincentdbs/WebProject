window.addEventListener("resize", displayNavbar);
var navbar = document.getElementById("links");
function displayMenu() {

    if (navbar.style.display === "block") {
        navbar.style.display = "none";
        console.log("none")
    } else {
        navbar.style.display = "block";
        console.log("inlione")
    }
}

function displayNavbar() {
   if (window.innerWidth >= 480){
       navbar.style.display = "block";
   }
   else{
       navbar.style.display = "none";
   }
}