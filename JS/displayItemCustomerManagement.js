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
}