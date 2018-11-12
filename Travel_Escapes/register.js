// AUTHOR: MARIA LOPEZ 
// DATE: OCTOBER 19, 2018
// MODULE: CPNT262 
// DAY 9 WORKSHOP - JAVASCRIPT


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



    //THIS FUNCTION IS A FORM TO REQUEST FOR USER INFO... DISPLAYS AN ERROR IF NOTHING INPUT

    
    
    
    var submitButton = document.getElementById('submit');
    var errorMessage = document.getElementById('errorMessage');

    submitButton.addEventListener('click',function(event) {

    // event.preventDefault()

    errorMessage.style.display ='none';

    var name = document.registerForm.name.value;
    var address = document.registerForm.address.value;
    var city = document.registerForm.city.value;
    var province = document.registerForm.province.value;
    var postal = document.registerForm.postal.value;
    var email = document.registerForm.email.value;
    var phone = document.registerForm.phone.value;
    
    if (!name) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!address) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!city) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!province) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!postal) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!email) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }

    if (!phone) {
        event.preventDefault();
        errorMessage.style.display = 'block';
    }


}

)