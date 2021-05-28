console.log(sessionStorage.getItem("isLog"));
console.log(document.getElementById('info-page'));

var emailV = document.forms['myForm']['email-login'];
var passwordV = document.forms['myForm']['password-login'];

if (sessionStorage.getItem("isLog")){
        document.getElementById('info-page').style.display = 'block';
        document.getElementById('login-page').style.display = 'none';
        document.getElementById("email").value =sessionStorage.getItem('email');
        
    }else{
        document.getElementById('info-page').style.display = 'none';
        document.getElementById('login-page').style.display = 'block';
    }

function validateForm() {
    var email = emailV.value;
    var password = passwordV.value;
    var isValid = true;
    if ( email=== "") {
        setErrorFor(document.getElementById('email-login'), 'Email cannot be blank');
        isValid = false;
    }
    if (password === ""){
        setErrorFor(document.getElementById('password'), 'Password cannot be blank');
        isValid = false;
    }
    return isValid;
}

function storeInfo(){
    sessionStorage.setItem('email', emailV.value);
    sessionStorage.setItem('isLog', true);
}
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}
function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}


function HiddenSignup(){
    if (sessionStorage.getItem('isLog')) {
    document.getElementById('signup').style.visibility = 'hidden';
    }
}