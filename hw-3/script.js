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
        "question":"What is the symbol og gold in the periodic table of elements?",
        "answers":["au","au","au"]
    },
    {
        "question":"What car manifactured by Zastava was imported to American market?",
        "answers":["yugo","yugo koral","koral"]
    },
    {
        "question":"Which country invented tea?",
        "answers":["china","china","china"]
    },
    {
        "question":"Which organ has four chambers?",
        "answers":["heart","heart","the heart"]
    },
    {
        "question":"What is the name of Batman's sidekick?",
        "answers":["robin","robin","robin"]
    },
    {
        "question":"What is the name of the world’s longest river?",
        "answers":["nile","nile","the nile"]
    },
    {
        "question":"Mahatma Gandi’s birthday is a national holiday in which country?",
        "answers":["india","india","india"]
    },
    {
        "question":"What is the name of the song with the most views on YouTube?",
        "answers":["despacito","despacito","despacito"]
    },
    {
        "question":"The fashion designer, Gianni Versace, came from which country?",
        "answers":["italy","italy","italy"]
    },
    {
        "question":"How many Lord of the Rings films are there?",
        "answers":["3","3","3"]
    },
    {
        "question":"Which popular TV show featured house Targaryen and Stark?",
        "answers":["got","got","game of thrones"]
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
        "answers":["odin","odin","odin"]
    },
    {
        "question":"How many cards are there in a standard deck of cards?",
        "answers":["52","52","fifty-two"]
    },
    {
        "question":"How many characters are there in a popular TV show Seinfeld?",
        "answers":["4","4","four"]
    }
];

var oldQuestions = [];

function setQuestion(){
    var n = getRandomQuestion();
    var q = document.getElementById("question");
    q.innerHTML = questions[n].question;
    setAnswers(n);
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
    var a = document.getElementById("answer2");
    a.innerHTML = questions[q].answers[n[1]];
    var a = document.getElementById("answer3");
    a.innerHTML = questions[q].answers[n[2]];
    var a = document.getElementById("answer4");
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
            x[i].style.borderColor = "#ff8333";
            x[i].style.backgroundColor = "#007bff";
        }
        document.getElementsByTagName("BODY")[0].style.backgroundColor = "#ff8333";
    }
    else{
        darkMode = true;
        var x = document.getElementsByClassName("elements");
        for(var i=0 ; i<x.length ; i++){
            x[i].style.borderColor = "#363535";
            x[i].style.backgroundColor = "#0055b0";
        }
        document.getElementsByTagName("BODY")[0].style.backgroundColor = "#363535";
    }
}

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
    startTimer(20);
    setQuestion();
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
            p.className="timer1 elements"
        }
        if (count === end){
        clearInterval(interval);
        document.getElementById('timer').innerHTML='0';
        p = document.getElementById("timer");
        p.className = "timer2 elements"
        }
    }, 100);
}

function darkenAnswer(x){
    if(darkMode){
        x.style.backgroundColor = "#004997";
    }
    else{
        x.style.backgroundColor = "#0061ff";
    }
}

function backAnswer(x){
    if(darkMode){
        x.style.backgroundColor = "#0055b0";
    }
    else{
        x.style.backgroundColor = "#007bff"
    }
}

var br = 0;

function mixQuestion(){
    x = document.getElementById("points");
    br += 1
    x.innerHTML = br;
    p = document.getElementById("hlp");
    if(p.className=="help1"){
        return 0;
    }
    else{
        setQuestion();
        p.className = "help1"
    }
}

