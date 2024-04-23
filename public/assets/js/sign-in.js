function validateEmail() {
    pattern = /.+@.+\..+/;
    email = $("#inputEmail").value;
    if (pattern.test(email)) {
        $("#email_error").style.display = 'none';
        validateInput();
    }
    else {
        $("#login_submit").disabled = true;
        $("#email_error").style.display = 'block';
    }
}

function validatePassword() {
    password = $("#inputPassword").value;
    if (password.length >= 6 && password.length <= 20) {
        $("#password_error").style.display = 'none';
        validateInput();
    }
    else {
        $("#login_submit").disabled = true;
        $("#password_error").style.display = 'block';
    }
}

function validateInput() {
    pattern = /.+@.+\..+/;
    email = $("#inputEmail").value;
    
    password = $("#inputPassword").value;
    if (pattern.test(email) && password.length >= 6 && password.length <= 20) {
        $("#login_submit").disabled = false;
    }
}