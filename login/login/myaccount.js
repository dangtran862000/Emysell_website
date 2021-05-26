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
    isValid = true;
    if ( email=== "") {
        setErrorFor(document.getElementById('email-login'), 'Email cannot be blank');
        isValid = false;
    } else if (email=== javaScriptVar){
            setErrorFor(document.getElementById('password'), '');
            if (password ==="1") {
            alert("Succes login!");
            storeInfo();
            document.getElementById('info-page').style.display = 'block';
            document.getElementById('login-page').style.display = 'none';
            }else{
                setErrorFor(document.getElementById('password'), 'Password is incorrect');
                isValid = false;
            }
    }else{
        setSuccessFor(document.getElementById('email-login'));
        // setErrorFor(document.getElementById('email-login'), 'Email is not exist');
    }
    if (password=== ""){
        setErrorFor(document.getElementById('password'), 'Password cannot be blank');
        isValid = false;
    }else{
        setErrorFor(document.getElementById('password'), 'Password is incorrect');
        
    }
    return isValid;
}
function storeInfo(){
    sessionStorage.setItem('email', document.getElementById('email-login').value);
    
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

/* fucntion to display none */
// document.getElementById('info-page').style.display =sessionStorage.getItem('display');
// document.getElementById('login-page').style.display =sessionStorage.getItem('display-none')

// document.getElementById("email").value =sessionStorage.getItem('email');

function HiddenSignup(){
    if (sessionStorage.getItem('isLog')) {
    document.getElementById('signup').style.visibility = 'hidden';
    }
}