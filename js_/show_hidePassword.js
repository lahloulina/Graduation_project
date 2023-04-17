function togglePassword() {
    var password = document.getElementById("password");
    var showPassword = document.getElementById("showPassword");
    if (password.type === "password") {
      password.type = "text";
      showPassword.src = "../picture_/hidePassword.png";
      showPassword.alt = "Hide Password";
     } else {
      password.type = "password";
      showPassword.src = "../picture_/showPassword.png";
      showPassword.alt = "Show Password";
    }
  }