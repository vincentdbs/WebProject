function displayDiv(icon) { //display or hide customer on loan item on click on the arrow
    let parentTr =  icon.parentNode.parentNode;
    let sibling = [];
    while(parentTr.nextSibling.className === "item-tr"){
        sibling.push(parentTr.nextSibling);
        parentTr = parentTr.nextSibling;
    }
    for(let i = 0 ; i < sibling.length ; i++){
        if (sibling[i].style.display === "table-row"){
            sibling[i].style.display = "none";
        }
        else{
            sibling[i].style.display = "table-row";
        }
    }

    console.log(icon.src);
    if(icon.src === "http://localhost/Projet/Icon/down_arrow.png"){
        icon.src = "http://localhost/Projet/Icon/up_arrow.png";
    }
    else {
        icon.src = "http://localhost/Projet/Icon/down_arrow.png";
    }
}

function upgradeToManager(id) {
    let xhttp = new XMLHttpRequest();
    if(confirm("Do you want to promote this user to administrator ?")){
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("The manager has been promoted !");
                window.open("../HTML/CustomerManagement.php", "_self");
            }
        };
        xhttp.open("GET", "../PHP/CustomerManagementUpgrade.php?user_id="+ id, true);
        xhttp.send();
    }
}