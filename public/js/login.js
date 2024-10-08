// Get the modal
let modal = document.getElementById("loginModal");

// Get the button that opens the modal
let btn = document.getElementById("loginBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close-btn")[0];

// Get the login and register forms
let loginForm = document.getElementById("loginForm");
let registerForm = document.getElementById("registerForm");

// Get the links that switch between forms
let showRegister = document.getElementById("showRegister");
let showLogin = document.getElementById("showLogin");
window.onload = function() {
    modal.style.display = "none";
}
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// When the user clicks on the "Đăng ký" link, show the register form
showRegister.onclick = function(event) {
    event.preventDefault();
    loginForm.style.display = "none";
    registerForm.style.display = "block";
}

// When the user clicks on the "Đăng nhập" link, show the login form
showLogin.onclick = function(event) {
    event.preventDefault();
    registerForm.style.display = "none";
    loginForm.style.display = "block";
}

