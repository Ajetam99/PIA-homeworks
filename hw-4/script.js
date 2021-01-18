var bgLight = "#191919";
var bgDark = "#8d99ae";
var darkModeStatus = false;

function darkMode(){
    if(darkModeStatus){
        document.getElementsByTagName("BODY")[0].style.backgroundColor = bgDark;
        darkModeStatus = false;
    }
    else{
        document.getElementsByTagName("BODY")[0].style.backgroundColor = bgLight;
        darkModeStatus = true;
    }
}