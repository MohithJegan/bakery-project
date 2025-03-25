window.onload = codeToRun;

function codeToRun() {
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const nameRegex = /^[A-Za-z]+(?:[ \-'][A-Za-z]+)*$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let messageError = document.getElementById("messageError");
    const contactForm = document.forms.contact_form;

    contactForm.onsubmit = submitHandle;

    function submitHandle(event) {
        // Prevent form submission if validation fails
        event.preventDefault();

        // Clear previous error messages
        nameError.innerHTML = "";
        emailError.innerHTML = "";
        messageError.innerHTML = "";

        let isValid = true;

        // Validate Name
        if (name.value.trim() === "") {
            nameError.innerHTML = "Name is required";
            isValid = false;
        } else if (!nameRegex.test(name.value.trim())) {
            nameError.innerHTML = "Name should contain only alphabets, spaces, hyphens, or apostrophes";
            isValid = false;
        }

        // Validate Email
        if (email.value.trim() === "") {
            emailError.innerHTML = "Email is required";
            isValid = false;
        } else if (!emailRegex.test(email.value.trim())) {
            emailError.innerHTML = "Enter a valid email";
            isValid = false;
        }

        // Validate Message
        if (message.value.trim() === "") {
            messageError.innerHTML = "Message is required";
            isValid = false;
        }

        // If all fields are valid
        if (isValid) {
            alert("Thank you! Your message is received!");
            name.value = "";
            email.value = "";
            message.value = "";
        }

        return false;
    }
}