// JavaScript source code
var email = document.forms['form']['email'];
var fname = document.forms['form']['fname'];
var lname = document.forms['form']['lname'];
var phone = document.forms['form']['phone'];
var address = document.forms['form']['address'];
var city = document.forms['form']['city'];
var zipcode = document.forms['form']['zipcode'];
var password = document.forms['form']['password'];
var repassword = document.forms['form']['repassword'];
var country = document.getElementById('s_adult');
var castore = document.getElementById('s_adult1');
var business_name = document.forms['form']['business_name'];
var store_name = document.forms['form']['store_name'];


// Error mess
var email_error = document.getElementById('email_error');
var fname_error = document.getElementById('fname-error');
var lname_error = document.getElementById('lname-error');
var phone_error = document.getElementById('phone_error');
var address_error = document.getElementById('address_error');
var city_error = document.getElementById('city_error');
var zipcode_error = document.getElementById('zipcode_error');
var password_error = document.getElementById('password_error');
var repassword_error = document.getElementById('repassword_error');
var country_error = document.getElementById('country_error');
var castore_error = document.getElementById('castore_error');
var business_error = document.getElementById('business_error');
var store_error = document.getElementById('store_error');


email.addEventListener('textInput', verfiedEmail);
fname.addEventListener('textInput', verfiedFname);
lname.addEventListener('textInput', verfiedLname);
phone.addEventListener('textInput', verifiedPhone);
address.addEventListener('textInput', verifiedAddress);
city.addEventListener('textInput', verifiedCity);
zipcode.addEventListener('textInput', verifiedZipcode);
password.addEventListener('textInput', verifiedPassword);
repassword.addEventListener('textInput', verifiedRepassword);
business_name.addEventListener('textInput', verifiedBusinessName);
store_name.addEventListener('textInput', verifiedStoreName);

function validated() {

    //email.addEventListener('textInput', verfiedEmail);
    //fname.addEventListener('textInput', verfiedFname);
    //lname.addEventListener('textInput', verfiedFName);

    var isValid = true;
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

    // Check validation of email
    if (!validateEmail(email.value)) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        isValid = false;
    }

    // Check validation of phone
    if ((phone.value.length < 9) || (phone.value.length > 11) || (!validatePhone(phone.value))) {
        phone.style.border = "1px solid red";
        phone_error.style.display = "block";
        phone.focus();
        isValid = false;
    }

    // Check validation of address
    if ((address.value.length < 3) || (!validateName(address.value))) {
        address.style.border = "1px solid red";
        address_error.style.display = "block";
        address.focus();
        isValid = false;
    }

    // Check validation of city
    if (city.value.length < 3 || (!validateName(city.value))) {
        city.style.border = "1px solid red";
        city_error.style.display = "block";
        city.focus();
        isValid = false;
    }

    // Check validation of zipcode
    if (!validateZipcode(zipcode.value)) {
        zipcode.style.border = "1px solid red";
        zipcode_error.style.display = "block";
        zipcode.focus();
        isValid = false;
    }

    // Check validation of password
    if (!validatePassword(password.value)) {
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        password.focus();
        isValid = false;
    }

    // Check validation of repassword
    if (repassword.value != password.value) {
        repassword.style.border = "1px solid red";
        repassword_error.style.display = "block";
        repassword.focus();
        isValid = false;
    }

    // Check validation of country
    if (country.value == "") {
        country_error.style.display = "block";
        country.focus();
        isValid = false;
    }


    // Check validation of country
    if (country.value != "") {
        country_error.style.display = "none";
    }

    // Check validation of categories
    if (castore.value == "" && (document.getElementById('storeowner').style.display != 'none')) {
        castore_error.style.display = "block";
        castore.focus();
        isValid = false;
    }


    // Check validation of country
    if (castore.value != "" && (document.getElementById('storeowner').style.display != 'none')) {
        castore_error.style.display = "none";
    }

    // Check validation of business
    if (((business_name.value.length < 3) || (!validateName(business_name.value))) && (document.getElementById('storeowner').style.display != 'none')) {
        business_name.style.border = "1px solid red";
        business_error.style.display = "block";
        business_name.focus();
        isValid = false;
    }

    // Check validation of store
    if (((store_name.value.length < 3) || (!validateName(store_name.value))) && (document.getElementById('storeowner').style.display != 'none')) {
        store_name.style.border = "1px solid red";
        store_error.style.display = "block";
        store_name.focus();
        isValid = false;
    }

    /*if (email.value.length > 3) {
        email.addEventListener('textInput', verfiedEmail);
    }*/

    return isValid;

}

function verfiedEmail() {
    if (email.value.length >= 8) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;

    }
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

function verifiedPhone() {
    if (phone.value.length >= 3) {
        phone.style.border = "1px solid silver";
        phone_error.style.display = "none";
        return true;

    }
}

function verifiedAddress() {
    if (address.value.length >= 3) {
        address.style.border = "1px solid silver";
        address_error.style.display = "none";
        return true;

    }
}

function verifiedCity() {
    if (city.value.length >= 3) {
        city.style.border = "1px solid silver";
        city_error.style.display = "none";
        return true;

    }
}

function verifiedZipcode() {
    if (zipcode.value.length >= 4 && zipcode.value.length <= 6) {
        zipcode.style.border = "1px solid silver";
        zipcode_error.style.display = "none";
        return true;
    }
}

function verifiedPassword() {
    if (password.value.length >= 3) {
        password.style.border = "1px solid silver";
        password_error.style.display = "none";
        return true;

    }
}

function verifiedRepassword() {
    if (repassword.value == password.value) {
        repassword.style.border = "1px solid silver";
        repassword_error.style.display = "none";
        return true;

    }
}


function verifiedBusinessName() {
    if (business_name.value.length >= 3) {
        business_name.style.border = "1px solid silver";
        business_error.style.display = "none";
        return true;

    }
}

function verifiedStoreName() {
    if (store_name.value.length >= 3) {
        store_name.style.border = "1px solid silver";
        store_error.style.display = "none";
        return true;

    }
}

// Regex using
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateName(name) {
    const re = /[a-zA-Z]+/;
    return re.test(name);
}

function validatePhone(phone) {
    const re = /^(\d+[-.\s]?)+\d+$/;
    return re.test(phone);
}

function validateZipcode(zipcode) {
    const re = /^\d{4,6}$/;
    return re.test(zipcode);
}

function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
    return re.test(password);
}

// Check if the customer choose which radio button
function checkRadio() {
    if (document.getElementById('store').checked) {
        document.getElementById('storeowner').style.display = 'block';
    }
    else document.getElementById('storeowner').style.display = 'none';
}

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('storeowner').style.display = 'block';
    }
    else document.getElementById('storeowner').style.display = 'none';

}