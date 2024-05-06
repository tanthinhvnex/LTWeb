document.addEventListener('DOMContentLoaded', function () {

    function checkPasswordsMatch() {
        const password = document.querySelector('input[name="password"]').value;
        const confirmPassword = document.querySelector('input[name="password-confirm"]').value;
        const errorElement = document.querySelector('.password-match-error');

        if (password !== confirmPassword) {
            
        } else {
            errorElement.style.display = 'none';
        }
    }


    document.querySelector('input[name="password"]').addEventListener('input', checkPasswordsMatch);
    document.querySelector('input[name="password-confirm"]').addEventListener('input', checkPasswordsMatch);


    document.querySelector('form').addEventListener('submit', function (event) {
        const password = document.querySelector('input[name="password"]').value;
        const confirmPassword = document.querySelector('input[name="password-confirm"]').value;

        if (password !== confirmPassword) {
            event.preventDefault(); 
            document.querySelector('.password-match-error').style.display = 'block';
        }
    });
    function getTokenFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('token');
    }

    const token = getTokenFromURL();

    if (!token) {
        document.getElementById('errorDiv').style.display = 'block';
        document.getElementById('resetPasswordForm').style.display = 'none';
        document.getElementsByClassName('auth__desc')[0].style.display='none';
    } else {

        document.getElementById('tokenInput').value = token;
    }
});