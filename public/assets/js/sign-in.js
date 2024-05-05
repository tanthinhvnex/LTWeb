function validateEmail() {
    pattern = /^\S+@\S+\.\S+$/;
    email = $("#inputEmail").value;
    if (pattern.test(email.trim())) {
        $("#email_error").style.display = 'none';
        
        $("#inputEmailFrame").style.borderColor = "#77dae6";
        $("#inputEmailFrame").style.backgroundColor = "transparent";

        $("#icon-email-error").style.display = 'none';

        $("#icon-email-good").style.display = 'block';
        $("#icon-email-good").style.marginLeft = '12px';

        if ($("#signin_submit")) {
            validateInput("#signin_submit");
        }
        else {
            validateInput("#signup_submit");
        }
    }
    else {
        $("#inputEmailFrame").style.borderColor = "#ed4337";
        $("#inputEmailFrame").style.backgroundColor = "rgba(237, 67, 55, 0.1)";
        
        $("#icon-email-error").style.display = 'block';
        $("#icon-email-error").style.marginLeft = '12px';
        $("#icon-email-error").style.animation = 'shake 0.5s';

        $("#icon-email-good").style.display = 'none';

        if ($("#signin_submit")) {
            $("#signin_submit").disabled = true;
        }
        else {
            $("#signup_submit").disabled = true;
        }
        $("#email_error").style.display = 'block';
        $("#email_error").style.marginLeft = '12px';
    }
}

function validatePassword() {
    password = $("#inputPassword").value;
    if (password.trim().length >= 6 && password.trim().length <= 20) {
        $("#password_error").style.display = 'none';

        $("#inputPasswordFrame").style.borderColor = "#77dae6";
        $("#inputPasswordFrame").style.backgroundColor = "transparent";

        $("#icon-password-error").style.display = 'none';

        $("#icon-password-good").style.display = 'block';
        $("#icon-password-good").style.marginLeft = '12px';
        if ($("#signin_submit")) {
            validateInput("#signin_submit");
        }
        else {
            validateInput("#signup_submit");
        }
    }
    else {
        $("#inputPasswordFrame").style.borderColor = "#ed4337";
        $("#inputPasswordFrame").style.backgroundColor = "rgba(237, 67, 55, 0.1)";
        
        $("#icon-password-error").style.display = 'block';
        $("#icon-password-error").style.marginLeft = '12px';
        $("#icon-password-error").style.animation = 'shake 0.5s';

        $("#icon-password-good").style.display = 'none';
        
        if ($("#signin_submit")) {
            $("#signin_submit").disabled = true;
        }
        else {
            $("#signup_submit").disabled = true;
        }
        $("#password_error").style.display = 'block';
        $("#password_error").style.marginLeft = '12px';
    }
    if($("#inputConfirmFrame")) {
        if ($("#inputConfirm").value == password) {
            $("#signup_submit").disabled = false;
        }
        else {
            $("#signup_submit").disabled = true;
        }
    }
}

function validateConfirm() {
    password = $("#inputPassword").value;
    confirmPassword = $("#inputConfirm").value;
    if (confirmPassword == password) {
        $("#confirm_error").style.display = 'none';

        $("#inputConfirmFrame").style.borderColor = "#77dae6";
        $("#inputConfirmFrame").style.backgroundColor = "transparent";

        $("#icon-confirm-error").style.display = 'none';

        $("#icon-confirm-good").style.display = 'block';
        $("#icon-confirm-good").style.marginLeft = '12px';
        if ($("#signin_submit")) {
            validateInput("#signin_submit");
        }
        else {
            validateInput("#signup_submit");
        }
    }
    else {
        $("#inputConfirmFrame").style.borderColor = "#ed4337";
        $("#inputConfirmFrame").style.backgroundColor = "rgba(237, 67, 55, 0.1)";
        
        $("#icon-confirm-error").style.display = 'block';
        $("#icon-confirm-error").style.marginLeft = '12px';
        $("#icon-confirm-error").style.animation = 'shake 0.5s';

        $("#icon-confirm-good").style.display = 'none';
        
        if ($("#signin_submit")) {
            $("#signin_submit").disabled = true;
        }
        else {
            $("#signup_submit").disabled = true;
        }
        $("#confirm_error").style.display = 'block';
        $("#confirm_error").style.marginLeft = '12px';
    }
}

function validateInput(submit) {
    pattern = /^\S+@\S+\.\S+$/;
    email = $("#inputEmail").value;
    
    password = $("#inputPassword").value;
    if (pattern.test(email.trim()) && password.trim().length >= 6 && password.trim().length <= 20) {
        $(submit).disabled = false;
    }
}
