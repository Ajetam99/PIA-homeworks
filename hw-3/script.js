function submited(){
    username = document.forms["myForm"]["name"].value
    if(username==""){
        return 0;
    }
    else{
        var r = document.getElementById("rules");
        var x = document.getElementById("start");
        var n = document.getElementById("formName");
        r.style.display = "block";
        n.style.display = "none";
        x.style.display = "block";
    }
}

function start(){

    document.getElementsByTagName("BODY")[0].style.backgroundColor = "#ff8333";
    var btn = document.getElementById("start");
    var q = document.getElementById("questions");
    var r = document.getElementById("rules");
    r.style.display = "none";
    btn.style.display = "none";
    q.style.display = "block";
    startTimer(20)
}

function startTimer(timerLength){
	var count = parseInt(new Date().getTime()/1000);
	var end = parseInt(new Date().getTime()/1000) + timerLength;
	var interval = setInterval(function(){
        document.getElementById('timer').innerHTML=end-count;
        if(parseInt(new Date().getTime()/1000) == count+1)
            count++;
        if(end-count<6){
            p = document.getElementById("timer");
            p.className="timer1"
        }
        if (count === end){
        clearInterval(interval);
        document.getElementById('timer').innerHTML='0';
        p = document.getElementById("timer");
        p.className = "timer2"
        }
    }, 100);
}

function darkenAnswer(x){
    x.style.backgroundColor = "#0061ff";
}

function backAnswer(x){
    x.style.backgroundColor = "#007bff"
}

function mixQuestion(){
    p = document.getElementById("hlp");
    if(p.className=="help1"){
        return 0;
    }
    else{

        p.className = "help1"
    }
}