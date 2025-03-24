/*
ADMIN CREDENTIALS
username - admin
password - admin123

*/

window.onload = codeToRun;

function codeToRun(){
    const loginForm = document.forms.login_form;
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    let usernameError = document.getElementById("username_error");
    let passwordError = document.getElementById("password_error");
    loginForm.onsubmit = submitHandle;

    function submitHandle(){
        // Reset for validation
        usernameError.innerHTML = "";
        passwordError.innerHTML = "";

        if(username.value===""){
            usernameError.innerHTML = `Username is required`;
        }
        if(password.value===""){
            passwordError.innerHTML = `Password is required`;
        }
        else{
            
            //check for admin
            if(username.value==="admin"&&password.value==="admin123"){
                window.location.href = 'http://localhost/Project/operation.php';
            }
            else{
                alert("Invalid credentials. Please check the credentials")
            }
        }
        
        return false;
    }
}