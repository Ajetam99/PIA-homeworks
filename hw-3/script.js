function start(){
    document.getElementsByTagName("BODY")[0].style.backgroundColor = "#ff8333";
    var btn = document.getElementById("start");
    var q = document.getElementById("questions");
    btn.style.display="none";
    q.style.display="block";

}

function darkenAnswer(x){
    x.style.backgroundColor = "#0061ff";
}

function backAnswer(x){
    x.style.backgroundColor = "#007bff"
}