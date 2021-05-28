var fname = document.forms['form']['fname'];
var fname = document.forms['form']['lname'];

var fname_error = document.getElementById('fname-error');
var fname_error = document.getElementById('lname-error');
var btn = document.getElementById('btn');

fname.addEventListener('keyup', verfiedFname);
lname.addEventListener('keyup', verfiedLname);

function validated(){
    var isValid = false;
    // Check validation of firstname
    if ((fname.value.length <= 3) || (!validateName(fname.value))) {
        fname.style.border = "1px solid red";
        fname_error.style.display = "block";
        fname.focus();
        isValid = false;
    }
    // Check validation of last name
    if ((lname.value.length <= 3) || (!validateName(lname.value))) {
        lname.style.border = "1px solid red";
        lname_error.style.display = "block";
        lname.focus();
        isValid = false;
    }
    return isValid;
}

function verfiedFname() {
    if (fname.value.length >= 3) {
        fname.style.border = "1px solid silver";
        fname_error.style.display = "none";
        return true;
    }
}

function verfiedLname() {
    if (lname.value.length >= 3) {
        lname.style.border = "1px solid silver";
        lname_error.style.display = "none";
        return true;

    }
}
function validateName(name) {
    const re = /[a-zA-Z]+/;
    return re.test(name);
}