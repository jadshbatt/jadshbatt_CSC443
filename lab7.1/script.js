const signinBtn= document.getElementById('signinBtn');
const signupBtn= document.getElementById('signupBtn');

signinBtn.onclick = function () {
    location.href = "signin.php";
};
signupBtn.onclick = function () {
    location.href = "signup.php";
};