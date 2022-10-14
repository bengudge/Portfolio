const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const email = document.getElementById('email');
const subject = document.getElementById('message-subject');
const message = document.getElementById('message');

const emailValidate = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

signup.addEventListener('submit', (event) =>{

    if(firstName.value == "") {
        alert("A First Name is required!");
    }

    if(lastName.value == "") {
        alert("A Last Name is required!");
    }

    if(email.value == "") {
        alert("An Email is required!");
    }

    if(!email.value.match(emailValidate)) {
        alert("A valid Email address is required!");
    }

    if(subject.value == "") {
        subject.value = "[No Subject]";
    }

    if(message.value == "") {
        alert("An empty message cannot be sent!");
    }

    // else submit...
});
