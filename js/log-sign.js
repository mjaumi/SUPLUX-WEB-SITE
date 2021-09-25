
var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("&");
var isLogInPressed = false;

/**
* this is to anmate the blue circle
*/
const signUpBtn = document.querySelector('#sign_up_btn');
const logInBtn = document.querySelector('#log_in_btn');

const container = document.querySelector('.main_container');

signUpBtn.addEventListener('click', () => {

    container.classList.add('sign_up_mode');
    window.history.pushState('', 'New Page Title', 'log-in-or-sign-up.html?param=signup');
});

logInBtn.addEventListener('click', () => {

    container.classList.remove('sign_up_mode');
    isLogInPressed = true;
    window.history.pushState('', 'New Page Title', 'log-in-or-sign-up.html?param=login');
});

/**
* this is to get the data to to show sign up initially
*/
if(queries[0] === 'param=signup'){

    container.classList.add('sign_up_mode');
}

/**
 * this is to show and hide password
 */
var logPassword = document.getElementById('log_password_field');
var signPassword = document.getElementById('sign_password_field');
var conPassword = document.getElementById('confirm_password_field');

var logToggler = document.getElementById('toggler_log');
var signToggler = document.getElementById('toggler_sign');
var conToggler = document.getElementById('toggler_con');

showHidePasswordLog = () => {
    
    if (logPassword.type == 'password') {

        logPassword.setAttribute('type', 'text');
        logToggler.classList.add('fa-eye-slash');
    } else {

        logToggler.classList.remove('fa-eye-slash');
        logPassword.setAttribute('type', 'password');
    }
};

showHidePasswordSign = () => {
    
    if (signPassword.type == 'password') {

        signPassword.setAttribute('type', 'text');
        signToggler.classList.add('fa-eye-slash');
    } else {

        signToggler.classList.remove('fa-eye-slash');
        signPassword.setAttribute('type', 'password');
    }
};

showHidePasswordCon = () => {
    
    if (conPassword.type == 'password') {

        conPassword.setAttribute('type', 'text');
        conToggler.classList.add('fa-eye-slash');
    } else {

        conToggler.classList.remove('fa-eye-slash');
        conPassword.setAttribute('type', 'password');
    }
};

logToggler.addEventListener('click', showHidePasswordLog);
signToggler.addEventListener('click', showHidePasswordSign);
conToggler.addEventListener('click', showHidePasswordCon);

/**
 * these functions are showing and hiding the eye of password fields
 */
setInterval( function(){

    if(logPassword.value == ''){

        logToggler.style.visibility = 'hidden';
    } else{

        logToggler.style.visibility = 'visible';  
    }
}, 100);

setInterval( function(){

    if(signPassword.value == ''){

        signToggler.style.visibility = 'hidden';
    } else{

        signToggler.style.visibility = 'visible';  
    }
}, 100);

setInterval( function(){

    if(conPassword.value == ''){

        conToggler.style.visibility = 'hidden';
    } else{

        conToggler.style.visibility = 'visible';  
    }
}, 100);
