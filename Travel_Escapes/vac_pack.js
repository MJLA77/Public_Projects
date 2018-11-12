// AUTHOR: MARIA LOPEZ 
// DATE: OCTOBER 19, 2018
// MODULE: CPNT262 
// DAY 9 WORKSHOP - JAVASCRIPT


// THIS FUNCTION DISPLAYS THE DATE AT THE BOTTOM

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


//THIS FUNCTION WAS SUPPOSED TO CHANGE THE PICTURE TO THE PACKAGE DETAILS 
//DID NOT HAVE ENOUGH TIME TO COMPLETE



var picture1 = document.getElementById("cottage");
var picture2 = document.getElementById("pack2");
var picture3 = document.getElementById("pack3");


picture1.addEventListener("mouseover",function (event) {

    event.target.style.backgroundColor = "orange";

        setTimeout(function() {
        event.target.style.color = "";
      }, 500);
    }, false);

