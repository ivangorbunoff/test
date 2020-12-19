
function handlerOne(event){
    var x = document.getElementById('myTopnav');
    if (x.className === "topnav")
    {
        x.className += " responsive";
    }
    else
    {
        x.className = "topnav";
    }
}
menu.addEventListener("click", handlerOne)














































































