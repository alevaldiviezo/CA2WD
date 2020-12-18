/* we create a function called hideTable */
function hideTable() {
    /* we retrieve the element table by its id */
    var show = document.getElementById('table');
    /* we give the conditions to the function */
    if(show.style.display === "none"){
        show.style.display = "block";
    }else{
        show.style.display = "none";
    }
}