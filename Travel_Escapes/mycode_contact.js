// AUTHOR: MARIA LOPEZ 
// DATE: OCTOBER 19, 2018
// MODULE: CPNT262 
// DAY 9 WORKSHOP - JAVASCRIPT


//THIS FUNCTION DISPLAYS TODAYS DATE AT THE BOTTOM OF THE PAGE

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


//THIS FUNCTION IS TO GIVE TRAVEL AGENT INFO AND PHONE NUMBER ON THE CONTACT PAGE
function travelagents(){

var contactUs = document.getElementById("contact_us") 

var travelAgent =  [ "Sheldon Copper","Harry Potter", "Tony Stark"];

var travelPhonenumber = [phone1="444-444-4444",phone2="333-333-333", phone3="777-777-7777"]


    contactUs.innerHTML = travelAgent[0] + " " +"Ph: "+travelPhonenumber[0] + "<br/>" + travelAgent[1] + " " +"Ph: "+travelPhonenumber[1] + "<br/>" + travelAgent[2] + " " +"Ph: "+travelPhonenumber[2] ;
}

travelagents();