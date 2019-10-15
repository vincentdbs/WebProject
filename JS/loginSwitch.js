let register = document.getElementById("register");
let login = document.getElementById("login");
switchConnexion();

function switchConnexion(){
    let leftLogin = document.getElementById("left-half-login");
    let rightLogin = document.getElementById("right-half-login");
    register.style.display = "none";
    login.style.display = "block";
    if (window.innerWidth >= 480){
        leftLogin.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
        leftLogin.style.backgroundSize = "cover";
        leftLogin.style.display = "block";
        rightLogin.style.backgroundImage = "none";
        rightLogin.style.backgroundColor = "white";
        rightLogin.style.width = "50%";

        console.log("connexion sup 480");
    }
    else{
        leftLogin.style.display = "none";
        rightLogin.style.backgroundColor = "white";
        rightLogin.style.width = "100%";
        rightLogin.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
        rightLogin.style.backgroundSize = "cover";
        console.log("connexion inf 480");
    }
}

function switchRegister() {
    let leftRegister = document.getElementById("left-half-register");
    let rightRegister = document.getElementById("right-half-register");
    register.style.display = "block";
    login.style.display = "none";

    if (window.innerWidth >= 480){
        rightRegister.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
        rightRegister.style.backgroundSize = "cover";
        rightRegister.style.display = "block";
        leftRegister.style.display = "block";
        leftRegister.style.backgroundImage = "none";
        leftRegister.style.backgroundColor = "white";
        leftRegister.style.width = "50%";
        console.log("register sup 480");
    }
    else{
        rightRegister.style.display = "none";
        leftRegister.style.backgroundColor = "white";
        leftRegister.style.width = "100%";
        leftRegister.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(\"../Image/porsche_face.jpg\")";
        leftRegister.style.backgroundSize = "cover";
        console.log("register inf 480");
    }
}

window.addEventListener("resize", getWindowSize);

function getWindowSize(){
    if(register.style.display === "none"){
        switchConnexion()
    }
    else if (login.style.display === "none"){
        console.log("register");
        switchRegister()
    }
}