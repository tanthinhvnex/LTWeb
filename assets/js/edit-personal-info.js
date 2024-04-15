function validateAndSubmitForm() {
    const submitButton = document.querySelector('.btn--primary');
    const inputs = document.querySelectorAll('.form__input');

    function hideError(input) {
        const errorParagraph = input.closest('.form__group').querySelector('.form__error');
        errorParagraph.style.display = 'none';
    }

    function checkFirstEmptyInputAndShowError() {
        for (let input of inputs) {
            const errorParagraph = input.closest('.form__group').querySelector('.form__error');
            if (input.value.trim() === '') {
                errorParagraph.style.display = 'block';
                errorParagraph.textContent = 'This field is required';
                input.focus();
                return false;
            }
        }
        return true;
    }

    inputs.forEach(input => {
        if (input.id !== 'card-expire' && input.id !== 'card-cvc') {
            input.addEventListener('input', () => hideError(input));
        }
    });

    validatePhoneNumber(); 

    submitButton.addEventListener('click', function (event) {
        const isFormValid = checkFirstEmptyInputAndShowError() && validatePhoneNumber();

        if (!isFormValid) {
            event.preventDefault();
        }
    });
}

function validatePhoneNumber() {
    const phoneNumberInput = document.getElementById('phone-number');
    const phoneNumberErrorIcon = document.getElementById('phone-number-error-icon');
    const phoneNumberErrorMsg = document.getElementById('phone-number-error');

    phoneNumberInput.addEventListener('input', function () {
        phoneNumberInput.setCustomValidity('');
        phoneNumberErrorIcon.style.display = 'none';
        phoneNumberErrorMsg.style.display = 'none';

        const phoneRegex = /^\d{10}$/;

        if (!phoneRegex.test(phoneNumberInput.value.trim())) {
            phoneNumberInput.setCustomValidity('Please must be at least 10 characters.');
            phoneNumberErrorMsg.textContent = phoneNumberInput.validationMessage;
        }

        if (phoneNumberInput.validationMessage) {
            phoneNumberErrorIcon.style.display = 'block';
            phoneNumberErrorMsg.style.display = 'block';
        }
    });

    return phoneNumberInput.checkValidity();
}

document.addEventListener('DOMContentLoaded', function () {
    validateAndSubmitForm();
});
