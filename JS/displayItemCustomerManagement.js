function displayDiv(icon) {
    let allTr = document.getElementsByClassName("item-tr");
    for (let i = 0 ; i < allTr.length ; i++){
        if (allTr.item(i).style.display === "table-row"){
            allTr.item(i).style.display = "none";
        }
        else{
            allTr.item(i).style.display = "table-row";
        }
    }
}