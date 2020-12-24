var questions =
[
    {
        "question":"Which country has the longest coastline?",
        "answers":["Canada","Indonesia","Norway","Grece"]
    },
    {
        "question":"In what year was the first-ever Wimbledon Championship held?",
        "answers":["1877","1893","1922","1903"]
    },
    {
        "question":"What does “HTTP” stand for?",
        "answers":["HyperText Transfer Protocol","HybridText Technology Protocol","HybridText Transfer Protocol","HyperText Technology Protocol"]
    },
    {
        "question":"What part of the atom has no electric charge?",
        "answers":["Neutron","Electron","Proton","Photon"]
    },
    {
        "question":"Which animal can be seen on the Porsche logo?",
        "answers":["Horse","Bull","Wolf","Cheetah"]
    },
    {
        "question":"Which country produces the most coffee in the world?",
        "answers":["Brazil","Vietnam","Colombia","Indonesia"]
    },
    {
        "question":"What is your body’s largest organ?",
        "answers":["Skin","Colon","Lungs","Brain"]
    },
    {
        "question":"Oktoberfest in Germany is celebrated with what drink?",
        "answers":["Beer","Wine","Whiskey","Hot Chocolate"]
    },
    {
        "question":"Which country did AC/DC originate in?",
        "answers":["Australia","England","America","Ireland"]
    },
    {
        "question":"What animal is on Lacoste's logo?",
        "answers":["Crocodile","Horse","Puma","Frog"]
    },
    {
        "question":"“Adventure of Sherlock Holmes” was written by which writer?",
        "answers":["Arthur Conan Doyle","JK Rowling","Stephen King","Mark Twain"]
    },
    {
        "question":"How many films did Sean Connery play James Bond in?",
        "answers":["7","3","5","1"]
    },
    {
        "question":"Who played Wolverine?",
        "answers":["Hugh Jackman","Christian Bale","Jared Leto","Chris Evans"]
    },
    {
        "question":"How long is the gestation period of an African elephant?",
        "answers":["22 months","9 months","14 months","18 months"]
    },
    {
        "question":"How many stripes does Adidas have?",
        "answers":["3","2","4","5"]
    },
    {
        "question":"How many Pyramids of Giza were made?",
        "answers":["3","2","4","5"]
    },
    {
        "question":"What was the name of the Egyptian God of the Sun?",
        "answers":["Ra","Osiris","Re","Anubis"]
    },
    {
        "question":"The video game “Happy Feet” features what animals?",
        "answers":["Penguins","Cats","Dogs","Goats"]
    },
    {
        "question":"Where does Buddhism fall in a ranking of the world’s largest religion?",
        "answers":["5.","4.","3.","1."]
    },
    {
        "question":"What is the tallest building in the world?",
        "answers":["Burj Khalifa","Shanghai Tower","Taipei 101","Empire State Building"]
    },
    {
        "question":"How many NBA titles did Michael Jordan win?",
        "answers":["6","6","six"]
    },
    {
        "question":"How many bytes are in a kilobyte?",
        "answers":["1024","1024","1024"]
    },
    {
        "question":"What is the symbol of gold in the periodic table of elements?",
        "answers":["Au","Au","Au"]
    },
    {
        "question":"What car manifactured by Zastava was imported to American market?",
        "answers":["Yugo","Yugo Koral","Koral"]
    },
    {
        "question":"Which country invented tea?",
        "answers":["China","China","China"]
    },
    {
        "question":"Which organ has four chambers?",
        "answers":["heart","heart","the heart"]
    },
    {
        "question":"What is the name of Batman's sidekick?",
        "answers":["Robin","Robin","Robin"]
    },
    {
        "question":"What is the name of the world’s longest river?",
        "answers":["Nile","Nile","the Nile"]
    },
    {
        "question":"Mahatma Gandi’s birthday is a national holiday in which country?",
        "answers":["India","India","India"]
    },
    {
        "question":"What is the name of the song with the most views on YouTube?",
        "answers":["Despacito","Despacito","Despacito"]
    },
    {
        "question":"The fashion designer, Gianni Versace, came from which country?",
        "answers":["Italy","Italy","Italy"]
    },
    {
        "question":"How many Lord of the Rings films are there?",
        "answers":["3","3","3"]
    },
    {
        "question":"Which popular TV show featured house Targaryen and Stark?",
        "answers":["Game Of Thrones","GOT","Game Of Thrones"]
    },
    {
        "question":"How many NBA championships do the Boston Celtics have?",
        "answers":["17","17","seventeen"]
    },
    {
        "question":"How many legs do spiders have?",
        "answers":["8","8","eight"]
    },
    {
        "question":"In what year did Steve Jobs die?",
        "answers":["2011","2011","2011"]
    },
    {
        "question":"In which year World War I end?",
        "answers":["1918","1918","1918"]
    },
    {
        "question":"Thor was the son of which God?",
        "answers":["Odin","Odin","Odin"]
    },
    {
        "question":"How many cards are there in a standard deck of cards?",
        "answers":["52","52","fifty-two"]
    },
    {
        "question":"How many main characters are there in a popular TV show Seinfeld?",
        "answers":["4","4","four"]
    }
];

// Saving to localStorage

function saveResult(usr,pts){
    for(i=1;i<11;i++){
        if(localStorage.getItem("res"+i.toString())==null){
            console.log("ovde1")
            localStorage.setItem("name"+i.toString(),usr);
            localStorage.setItem("res"+i.toString(), pts.toString());
            console.log(i.toString()+ "   kraj prvog ifa");
            return 0;
        }
        else {
            if(parseInt(localStorage.getItem("res"+i.toString()))<pts){
                console.log("ovde2")
                var helpU = localStorage["name"+i.toString()] ;
                var helpP = parseInt(localStorage.getItem("res"+i.toString()));
                console.log(helpU);
                console.log(helpP);
                localStorage.setItem("name"+i.toString(),usr);
                localStorage.setItem("res"+i.toString(), pts.toString());
                pts = helpP;
                usr = helpU;
            }
            else if(parseInt(localStorage.getItem("res"+i.toString()))==pts){
                if(localStorage.getItem("name"+i.toString())>usr){
                    var helpU = localStorage["name"+i.toString()] ;
                    var helpP = parseInt(localStorage.getItem("res"+i.toString()));
                    console.log(helpU);
                    console.log(helpP);
                    localStorage.setItem("name"+i.toString(),usr);
                    localStorage.setItem("res"+i.toString(), pts.toString());
                    pts = helpP;
                    usr = helpU;
                }
            }
        
        }
    }
    return 0
}

// #################

function showLeaderboard(){
    var f = document.getElementById("formName");
    f.style.display = "none";
    var q = document.getElementById("questions");
    q.style.display = "none";
    var l = document.getElementById("leaderboard")
    l.style.display = "block";
    for(var i=1 ; i<11 ; i++){
        var u = document.getElementById("user"+i.toString());
        u.innerText = localStorage["name"+i.toString()];
        var kkk = document.getElementById("result"+i.toString());
        kkk.innerHTML = 9;
    }
}

function endGame(){
    saveResult(username,points);
    showLeaderboard();
}

document.getElementById("name").focus();

var username;
var bgDark = "#353535";
var bgLight = "#ff8333";
var light = "#007bff";
var dark = "#0055b0";
var lightSelect = "#0061ff";
var darkSelect = "#004997";

var currentQuestion = 0;
var questionNumber = 0;
var points = 0;

var oldQuestions = [];
var alreadyAnswered = false;
var countQuestions = [0,0];



function askQuestion(){
    if(!mixed){
        questionNumber+=1;
    }
    mixed = false;
    document.getElementById("numOfQuestion").innerHTML = questionNumber;
    var q = Math.floor(Math.random() * 2);
    if(countQuestions[0]==5){
        q = 1;
    }
    if(countQuestions[1]==5){
        q = 0;
    }
    p = document.getElementById("timer");
    p.className = "timer elements";
    alreadyAnswered = false;
    if(q==0){
        countQuestions[0]+=1;
        setQuestion();
    }
    else{
        countQuestions[1]+=1;
        setQuestionText();
    }
}

function showPoints(){
    document.getElementById("points").innerHTML = points;
}

function textAnswer(){
    if(alreadyAnswered){
        return null;
    }
    else{
        p = document.getElementById("timer");
        p.className = "timer elements";
        clearTimeout(timer);
        alreadyAnswered = true;
        a = document.getElementById("textAnswer");
        a.style.backgroundColor = "#c4c10e";
        b = document.getElementById("answerInput");
        b.disabled = true;
        setTimeout(function(){
            if(rightAnswer()){
                b.disabled = "true";
                a.style.backgroundColor = "green";
                points += 1;
                showPoints();
            }
            else{
                b.disabled = "true";
                b.value = questions[currentQuestion].answers[0];
                a.style.backgroundColor = "red";
                findAnswer();
                }
            setTimeout(nextQuestion,2000)

        },1000);
    }
}

function rightAnswer(){
    ans = document.forms["FormAns"]["answerInput"].value;
    if(questions[currentQuestion].answers[0].toLowerCase()==ans.trim().toLowerCase()){
        return true;
    }
    if(questions[currentQuestion].answers[1].toLowerCase()==ans.trim().toLowerCase()){
        return true;
    }
    if(questions[currentQuestion].answers[2].toLowerCase()==ans.trim().toLowerCase()){
        return true;
    }
    return false;
}

function answered(a){
    if(alreadyAnswered){
        return null;
    }
    else{
        p = document.getElementById("timer");
        p.className = "timer elements";
        clearTimeout(timer);
        alreadyAnswered = true;
        a.style.backgroundColor = "#c4c10e";
        setTimeout(function(){
            if(questions[currentQuestion].answers[0]==a.innerHTML){
                a.style.backgroundColor = "green";
                points += 1;
                showPoints();
            }
            else{
                a.style.backgroundColor = "red";
                findAnswer();
                }
            setTimeout(nextQuestion,2000)

        },1000);
    }
}

function findAnswer(){
    if(document.getElementById("answer1").innerHTML == questions[currentQuestion].answers[0]){
        document.getElementById("answer1").style.backgroundColor = "green";
    }
    if(document.getElementById("answer2").innerHTML == questions[currentQuestion].answers[0]){
        document.getElementById("answer2").style.backgroundColor = "green";
    }
    if(document.getElementById("answer3").innerHTML == questions[currentQuestion].answers[0]){
        document.getElementById("answer3").style.backgroundColor = "green";
    }
    if(document.getElementById("answer4").innerHTML == questions[currentQuestion].answers[0]){
        document.getElementById("answer4").style.backgroundColor = "green";
    }
}

function nextQuestion(){
    if(questionNumber==10){
        endGame();
    }
    else{
        enterDarkMode();
        enterDarkMode();
        askQuestion();
    }

}


function setQuestionText(){
    var ans = document.getElementById("textAnswer");
    ans.style.display = "block";
    document.getElementById("formAnswer").reset()
    hideAnswers();
    b = document.getElementById("answerInput");
    b.disabled = false;
    document.getElementById("answerInput").focus();
    currentQuestion = getRandomQuestionText();
    var q = document.getElementById("question");
    q.innerHTML = questions[currentQuestion].question;
    startTimer(20);
}

function hideAnswers(){
    var ans1 = document.getElementById("answers12");
    ans1.style.display = "none";
    var ans2 = document.getElementById("answers34");
    ans2.style.display = "none";
}

function showAnswers(){
    var ans1 = document.getElementById("answers12");
    ans1.style.display = "";
    var ans2 = document.getElementById("answers34");
    ans2.style.display = "";
}

function getRandomQuestionText(){
    var q = Math.floor(Math.random() * 20) + 20;
    if(oldQuestions.includes(q)){
        return getRandomQuestionText();
    }
    else {
        oldQuestions.push(q);
        return q;
    }
}

function setQuestion(){
    showAnswers();
    var ans = document.getElementById("textAnswer");
    ans.style.display = "none";
    currentQuestion = getRandomQuestion();
    var q = document.getElementById("question");
    q.innerHTML = questions[currentQuestion].question;
    setAnswers(currentQuestion);
    startTimer(20);
}

function getRandomQuestion(){
    var q = Math.floor(Math.random() * 20);
    if(oldQuestions.includes(q)){
        return getRandomQuestion();
    }
    else {
        oldQuestions.push(q);
        return q;
    }
}

function setAnswers(q){
    n = getRandomAnswers();
    var a = document.getElementById("answer1");
    a.innerHTML = questions[q].answers[n[0]];
    a = document.getElementById("answer2");
    a.innerHTML = questions[q].answers[n[1]];
    a = document.getElementById("answer3");
    a.innerHTML = questions[q].answers[n[2]];
    a = document.getElementById("answer4");
    a.innerHTML = questions[q].answers[n[3]];
}

function getRandomAnswers(){
    let ans = [0, 1, 2, 3]
    ans = ans.sort(() => Math.random() - 0.5)
    return ans
}

var darkMode = false;

function enterDarkMode(){
    if(darkMode){
        darkMode = false;
        var x = document.getElementsByClassName("elements");
        for(var i=0 ; i<x.length ; i++){
            x[i].style.borderColor = bgLight;
            x[i].style.backgroundColor = light;
        }
        document.getElementsByTagName("BODY")[0].style.backgroundColor = bgLight;
    }
    else{
        darkMode = true;
        var x = document.getElementsByClassName("elements");
        for(var i=0 ; i<x.length ; i++){
            x[i].style.borderColor = bgDark;
            x[i].style.backgroundColor = dark;
        }
        document.getElementsByTagName("BODY")[0].style.backgroundColor = bgDark;
    }
}

function submited(){
    username = document.forms["myForm"]["name"].value
    if(username.trim()==""){
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
    var btn = document.getElementById("start");
    var q = document.getElementById("questions");
    var r = document.getElementById("rules");
    r.style.display = "none";
    btn.style.display = "none";
    q.style.display = "block";
    askQuestion();
}

var timer;

function startTimer(timerLength){
    clearTimeout(timer);
    p = document.getElementById("timer");
    p.className = "timer elements";
	var count = parseInt(new Date().getTime()/1000);
	var end = parseInt(new Date().getTime()/1000) + timerLength;
	timer = setInterval(function(){
        document.getElementById('timer').innerHTML=end-count;
        if(parseInt(new Date().getTime()/1000) == count+1)
            count++;
        if(end-count<6){
            p = document.getElementById("timer");
            p.className="timer1 elements"
        }
        if (count === end){
        clearInterval(timer);
        document.getElementById('timer').innerHTML='0';
        p = document.getElementById("timer");
        p.className = "timer2 elements";
        findAnswer();
        alreadyAnswered = true;
        setTimeout(function(){
            p = document.getElementById("timer");
            p.className="timer elements"
            nextQuestion();
        },2000);

        }
    }, 100);
}


function darkenAnswer(x){
    if(alreadyAnswered){
        return null;
    }
    else{
        if(darkMode){
            x.style.backgroundColor = darkSelect;
        }
        else{
            x.style.backgroundColor = lightSelect;
        }
    }
}

function backAnswer(x){
    if(alreadyAnswered){
        return null;
    }
    else{
        if(darkMode){
            x.style.backgroundColor = dark;
        }
        else{
            x.style.backgroundColor = light;
        }
    }
}

var br = 0;
var mixed = false;

function mixQuestion(){
    if(alreadyAnswered){
        return null;
    }
    else{
        d = document.getElementById("hlp");
        if(d.className=="help1"){
            return 0;
        }
        else{
            mixed = true;
            askQuestion();
            d.className = "help1"
        }
    }
}

function dark() {
    x = document.getElementsByTagName("BODY")[0].className = "dark";
}