switchConnexion();

function switchConnexion(){
    let left = document.getElementById("register");
    let right = document.getElementById("login");

    left.style.display = "none";
    right.style.display = "block";

    let leftRegister = document.getElementById("right-half-login");
    let rightRegister = document.getElementById("left-half-login");

    leftRegister.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
    leftRegister.style.backgroundSize = "cover";
    rightRegister.style.backgroundImage = "none";
    rightRegister.style.backgroundColor = "white";

    console.log("connexion");
}

function switchRegister() {
    let register = document.getElementById("register");
    let login = document.getElementById("login");
    register.style.display = "block";
    login.style.display = "none";

    let leftRegister = document.getElementById("right-half-register");
    let rightRegister = document.getElementById("left-half-register");

    leftRegister.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
    leftRegister.style.backgroundSize = "cover";
    rightRegister.style.backgroundImage = "none";
    rightRegister.style.backgroundColor = "white";


    console.log("hfd")
}