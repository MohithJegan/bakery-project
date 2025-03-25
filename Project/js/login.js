window.onload = function () {
  const loginForm = document.forms.login_form;
  const username = document.getElementById("username");
  const password = document.getElementById("password");
  const usernameError = document.getElementById("username_error");
  const passwordError = document.getElementById("password_error");

  loginForm.onsubmit = function (event) {
    // Prevent form submission
    event.preventDefault(); 

    // Reset error messages
    usernameError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    // Validate Username
    if (username.value.trim() === "") {
      usernameError.textContent = "Username is required";
      isValid = false;
    }

    // Validate Password
    if (password.value.trim() === "") {
      passwordError.textContent = "Password is required";
      isValid = false;
    }

    // Check for admin credentials
    if (isValid) {
      if (
        username.value.trim() === "admin" &&
        password.value.trim() === "admin123"
      ) {
        window.location.href = "http://localhost/Project/operation.php";
      } else {
        alert("Invalid credentials. Please check the credentials.");
      }
    }

    return false; 
  };
};
