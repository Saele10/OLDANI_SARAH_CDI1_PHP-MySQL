//Formulaires 
let form = document.querySelector('form')

form.addEventListener('submit', function(event) {
    event.preventDefault();
    console.log('Form Sent');

    //name
    let name = document.querySelector('#name');
    name.classList.remove('input-error', 'input-ok');

    if (name.value.length < 2) {
        name.classList.add('input-error');
    }
    else {
        name.classList.add('input-ok');
    }

    //first name
    let firstName = document.querySelector('#firstName');
    firstName.classList.remove('input-error', 'input-ok');
    if (firstName.value.length < 2) {
        firstName.classList.add('input-error');
    }
    else {
        firstName.classList.add('input-ok');
    }

    //pseudo
    let pseudo = document.querySelector('#pseudo');
    let errorPseudo = document.querySelector('.errorPseudo')
    pseudo.classList.remove('input-error', 'input-ok');
    if (pseudo.value.length < 6) {
        pseudo.classList.add('input-error');
        errorPseudo.classList.add('activeError');
    }
    else {
        pseudo.classList.add('input-ok');
        errorPseudo.classList.remove('activeError');
    }

    //email
    let email = document.querySelector('#email');
    email.classList.remove('input-error', 'input-ok');
    var emailCheck = new RegExp("^(?=.*[@])");
    if (emailCheck.test(email.value) == false) {
        email.classList.add('input-error');
    }
    else {
        email.classList.add('input-ok');
    }

    //password
    let password = document.querySelector('#password');
    let password2 = document.querySelector('#password2');
    let errorPassword = document.querySelector('.errorPassword')
    let passCheck = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    password.classList.remove('input-error', 'input-ok');
    if (passCheck.test(password.value) == false) {
        password.classList.add('input-error');
        errorPassword.classList.add('activeError');
    }
    else {
        password.classList.add('input-ok');
        errorPassword.classList.remove('activeError');
    }
    if (password2.value !== password.value || password2.value.length === 0) {
        password2.classList.add('input-error');
    }
    else if (password2.value == password.value){
        password2.classList.add('input-ok');
    }

    // Success 
    let success = document.querySelector('.success')
    if (
        name.classList.contains('input-ok') &&
        firstName.classList.contains('input-ok') &&
        pseudo.classList.contains('input-ok') &&
        email.classList.contains('input-ok') &&
        password.classList.contains('input-ok') &&
        password2.classList.contains('input-ok') 
    ){
        success.classList.add('activeError')
    }
    else {
        success.classList.remove('activeError')
    }
})
