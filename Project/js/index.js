window.onload = codeToRun;

function codeToRun(){
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let messageError = document.getElementById("messageError");
    const contactForm = document.forms.contact_form;
    contactForm.onsubmit = submitHandle;

    function submitHandle(){
        nameError.innerHTML = "";
        emailError.innerHTML  = "";
        messageError.innerHTML  = "";
        if(name.value===''){
            nameError.innerHTML = "Name is required";
            console.log(nameError.value)
        }
        if(email.value===''){
            emailError.innerHTML = "Email is required";
        }
        if(message.value===''){
            messageError.innerHTML = "Message is required";
        }
        else{
            alert("Thank you! Your message is recieved!");
            name.value="";
            email.value="";
            message.value="";
        }
    }
}