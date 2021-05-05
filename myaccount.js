console.log(sessionStorage.getItem("isLog"));
console.log(document.getElementById('info-page'))
if (sessionStorage.getItem("isLog")){
        document.getElementById('info-page').style.display = 'block';
        document.getElementById('login-page').style.display = 'none';
        document.getElementById("email").value =sessionStorage.getItem('email');
        
    }else{
        document.getElementById('info-page').style.display = 'none';
        document.getElementById('login-page').style.display = 'block';
    }

function validateForm() {
    email = document.getElementById('email-login').value;
    password =  document.getElementById('password').value
    if ( email=== "") {
        setErrorFor(document.getElementById('email-login'), 'Email cannot be blank');
    }else{
        setSuccessFor(document.getElementById('email-login'));
    }
    if (password=== "") {
        setErrorFor(document.getElementById('password'), 'Password cannot be blank');
    } else if (password ==="password") {
        storeInfo();
        document.getElementById('info-page').style.display = 'block';
        document.getElementById('login-page').style.display = 'none';
    }
    else{
        setErrorFor(document.getElementById('password'), 'Password is incorrect');;
    }
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

