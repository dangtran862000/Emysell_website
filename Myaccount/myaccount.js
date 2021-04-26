
function validateForm() {
    email = document.getElementById('email-login').value;
    password =  document.getElementById('password').value
    if ( email== "") {
        setErrorFor(document.getElementById('email-login'), 'Email cannot be blank');
    }else{
        setSuccessFor(document.getElementById('email-login'));
    }
    if (password== "") {
        setErrorFor(document.getElementById('password'), 'Password cannot be blank');
    } else if (password =="password") {
        alert("Log in succesfully");
    }
    else{
        setErrorFor(document.getElementById('password'), 'Password is incorrect');;
    }
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

