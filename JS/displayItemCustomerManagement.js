function displayDiv(icon) {
    let parentTr =  icon.parentNode.parentNode; //get parent tr
    let sibling = parentTr.nextSibling;

    if(sibling.style.display === "table-row"){
        sibling.style.display = "none";
    }
    else{
        // sibling.style.columnSpan = "6";
        sibling.style.display = "table-row";
    }

}