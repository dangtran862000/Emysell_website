

const inputLname = document.querySelector('#lname');
const inputEmail = document.querySelector('#email');
const inputComment = document.querySelector('#comment');
const inputPhone = document.querySelector('#phone');
const form = document.querySelector("#form");

inputLname.addEventListener('keyup', updateName);
inputEmail.addEventListener('keyup', updateEmail);
inputPhone.addEventListener('keyup', updatePhone);
form.addEventListener('submit',updateMethod);
form.addEventListener('submit',updateDay);
form.addEventListener('submit',updateComment2)
inputComment.addEventListener('keyup', updateComment);

const regName = /[a-zA-Z]+/;
const regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const regPhone = /^(\d+[-.\s]?)+\d+$/;
var nameReturnValue = 0;
var emailReturnValue = 0;
var phoneReturnValue = 0;
var methodReturnValue = 0;
var dayReturnValue = 0;
var cmtReturnValue = 0;

/* Form validation */
function validated(){
    updateName()
    updateEmail()
    updatePhone()
    updateMethod()
    updateDay()
    updateComment()
    if (nameReturnValue === 1 && emailReturnValue ===1 && phoneReturnValue === 1 && methodReturnValue === 1 && dayReturnValue ===1 && cmtReturnValue===1) {
        alert("Successfully Submitted");
    }else{
        
    }

}

/* Checking Input while typing */
function updateName() {
    lnameValue = document.getElementById('lname').value;
    if ((lnameValue.match(regName)) &&(lnameValue.length >= 3)){
    document.getElementById('lname-error').style.display = 'none';
    nameReturnValue = 1;
    }else{
        document.getElementById('lname-error').style.display = 'block';
        nameReturnValue = 0;
    }
}

function updateEmail() {
    emailValue = document.getElementById('email').value;
    if ((emailValue.match(regEmail))){
    document.getElementById('email_error').style.display = 'none';
    emailReturnValue = 1;
    }else{
        document.getElementById('email_error').style.display = 'block';
        emailReturnValue = 0;
    }
    
}

function updatePhone() {
    phoneValue = document.getElementById('phone').value;
    phoneLength = phoneValue.length;
    if ((phoneValue.match(regPhone)) && ((phoneLength  >= 9) && (phoneLength <= 11))){
    document.getElementById('phone_error').style.display = 'none';
    phoneReturnValue = 1;
    }else{
        document.getElementById('phone_error').style.display = 'block';
        phoneReturnValue = 0;
    }
}

function updateMethod(){

    var radioValue = $("input[type=radio]:checked").val();
        if(radioValue){
            document.getElementById('contact_error').style.display = 'none';
            methodReturnValue = 1;
        }else{
            document.getElementById('contact_error').style.display = 'block';
            methodReturnValue = 0;
        }
}

function updateComment2(){
    if (cmtReturnValue ===1) {
        document.getElementById('cmt-error').style.display = 'none'; 
    }
}

function updateDay(){

        if ($("input[type=checkbox]").is(":checked")){
            document.getElementById('day-error').style.display = 'none';
            dayReturnValue = 1;
        }else{
            document.getElementById('day-error').style.display = 'block';
            dayReturnValue = 0;
        }
}

function updateComment(){
    var cmtlength = document.getElementById('comment').value.length
    if(cmtlength < 50){
        document.getElementById('cmt-error').style.display = 'block';
        document.getElementById("cmt-error").innerHTML = 50 - cmtlength + " more letters are needed";
        cmtReturnValue = 0;
    }else if(cmtlength < 500 && cmtlength >= 50){
        document.getElementById('cmt-error').style.display = 'block';
        document.getElementById("cmt-error").innerHTML = "You can type " + (500 - cmtlength) + " more letters";
        cmtReturnValue = 1;
    }else{
        document.getElementById('cmt-error').style.display = 'block';
        document.getElementById("cmt-error").innerHTML = "Delete " + (cmtlength - 500) + " letters is needed";
        cmtReturnValue = 0;
    }
}
