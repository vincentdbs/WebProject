function displayDiv() {
    let allTr = document.getElementsByClassName("item-tr");
    for (let i = 0 ; i < allTr.length ; i++){
        if (allTr.item(i).style.display === "table-row"){
            allTr.item(i).style.display = "none";
        }
        else{
            allTr.item(i).style.display = "table-row";
        }
    }

    // let parentTr =  icon.parentNode.parentNode; //get parent tr
    // let sibling = parentTr.nextSibling;
    // console.log(sibling);
    // console.log(parentTr);


    // if(sibling.style.display === "table-row"){
    //     sibling.style.display = "none";
    // }
    // else{
    //     // sibling.style.columnSpan = "6";
    //     sibling.style.display = "table-row";
    // }
}