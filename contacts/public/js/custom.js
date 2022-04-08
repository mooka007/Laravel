const form = document.getElementById('form');
const nname = document.getElementById('name');
const email = document.getElementById('email')
const password = document.getElementById('password');
const password_confirm = document.getElementById('password-confirm');

const errName = document.querySelector('errorName');
const errEmail = document.querySelector('errorEmail')
const errPassword = document.querySelector('errorPassword');
const errPassword_confirm = document.querySelector('errorConfPassword');

let valid = true;
form.addEventListener('submit', (e)=>{
    if(nname.value.trim() == ""){
        e.preventDefault();
        errName.innerHTML = "Empty !";
        valid = false;
    }

    let regexEmail = /^[a-zA-Z0-9_]{4,}@[a-zA-Z]{4,10}[.]{1}[a-z]{3,4}$/
    if(email.value.trim() == ''){
        e.preventDefault();
        errEmail.innerHTML = "Email Empty !"
        valid = false;
    }else if(!regexEmail.test(email.value.trim())){
        e.preventDefault();
        errEmail.innerHTML ="You Should write it like example@email.com"
        valid = false;
    }

    // (?=.*?[A-Z]) = one upperCase
    //.{8,} = min 8 in length and max 30
    //(?=.*[#$@!%&*?]) = one char
    let regexPass = /^ (?=.*?[A-Z])[a-zA-Z0-9_](?=.*[#$@!%&*?]) {8,30}$/
    if(password.value.trim() == ''){
        e.preventDefault();
        password.innerHTML = "Empty !"
    }else if(!regexPass.test(password.value.trim())){
        e.preventDefault();
        errPassword.innerHTML = "Password Must Contain more than 8 Characters and Letters one UpperCase and One Character"
        valid = false;
    }

    if(password_confirm.value.trim() == ''){
        e.preventDefault();
        errPassword_confirm.innerHTML = "Empty !";
        valid = false;
    }else if(password_confirm.value.trim() != password.value.trim() ){
        e.preventDefault();
        errPassword_confirm.innerHTML = "Password Not Matched !";
        valid = false;
    }


    if(valid){
        document.getElementById('check_Signup').innerHTML +=  `<div class="" id="check_Signup"></div>`
        setTimeout(close_mess, 3000)
    }

})