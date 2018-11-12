// AUTHOR: MARIA LOPEZ 
// DATE: OCTOBER 19, 2018
// MODULE: CPNT262 
// DAY 9 WORKSHOP - JAVASCRIPT


// THIS FUNCTION DISPLAYS TODAYS DATE AT THE BOTTOM OF THE PAGE

var date1 = document.getElementById("date");

var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

var dateNow = new Date();
var yearNow = dateNow.getFullYear();
var monthNow = months[dateNow.getMonth()];
var dayNow = dateNow.getDate();
var daySuffix;

switch (dayNow) {
    case 1:
    case 21:
    case 31:
        daySuffix = "st";
        break;
    
    case 2:
    case 22:
        daySuffix ="nd";
        break;
    
    case 3:
    case 23:
        daySuffix = "rd";
        break;
        
    default:
        daySuffix = "th";
        break;    

}
date1.innerHTML = monthNow + " "+ dayNow + " , "+ yearNow;


// THIS FUNCTION MAKES THE PLANE FLY 
    var switchDirection = false;

    function fuckingfly() {

        var planeFly = document.getElementById("plane");
        var currentLeft = planeFly.offsetLeft;
        var newLocation;

        if (!switchDirection) {
            newLocation = currentLeft +2;
        
        if (currentLeft >= (window.innerWidth-50)) {
                switchDirection = true;
               
                
        }} else {
            
            newLocation = currentLeft - 2;

        if (currentLeft <=0) {
                    switchDirection = false;
            }

            
        }

        planeFly.style.left = newLocation + "px";
    }
        setInterval(fuckingfly,10);




