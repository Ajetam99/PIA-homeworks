function submited(){
    username = document.forms["myForm"]["name"].value
    if(username==""){
        return 0;
    }
    else{
        var x = document.getElementById("start");
        var n = document.getElementById("formName");
        n.style.display = "none";
        x.style.display = "block";
    }
}

function start(){

    document.getElementsByTagName("BODY")[0].style.backgroundColor = "#ff8333";
    var btn = document.getElementById("start");
    var q = document.getElementById("questions");

    btn.style.display = "none";
    q.style.display = "block";

}

function darkenAnswer(x){
    x.style.backgroundColor = "#0061ff";
}

function backAnswer(x){
    x.style.backgroundColor = "#007bff"
}