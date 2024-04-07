function validateAndSubmitForm() {
    const submitButton = document.querySelector('.cart-info__next-btn');
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
        if (input.id !== 'expiration-date' && input.id !== 'card-cvv') {
            input.addEventListener('input', () => hideError(input));
        }
    });

    validateCVV();

    submitButton.addEventListener('click', function (event) {
        const isFormValid = checkFirstEmptyInputAndShowError() && validateCVV();

        if (!isFormValid) {
            event.preventDefault();
        }
    });
}

function validateCVV() {
    const cvvInput = document.getElementById('card-cvv');
    const errorIcon = document.getElementById('cvc-error-icon')
    const errorMsg = document.getElementById('cvc-error')

    cvvInput.addEventListener('input', function () {
        const value = cvvInput.value;
        cvvInput.setCustomValidity('');
        errorMsg.style.display = 'none';
        errorIcon.style.display = 'none';

        if (value.trim() === '') {
            cvvInput.setCustomValidity('This field is required.');
        } else if (!/^\d{3,4}$/.test(value)) {
            cvvInput.setCustomValidity('CVV must be 3 or 4 digits.');
        }

        errorMsg.textContent = cvvInput.validationMessage;
        if (cvvInput.validationMessage) {
            errorMsg.style.display = 'block';
            errorIcon.style.display = 'block';
        }
    });

    return cvvInput.checkValidity();
}

document.addEventListener('DOMContentLoaded', function () {
    validateAndSubmitForm();
});
