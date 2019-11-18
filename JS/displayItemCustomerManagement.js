function displayDiv(icon) {
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