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
        if (input.id !== 'card-expire' && input.id !== 'card-cvc') {
            input.addEventListener('input', () => hideError(input));
        }
    });

    validateExpiryDate();
    validateCVV();

    submitButton.addEventListener('click', function (event) {
        const isFormValid = checkFirstEmptyInputAndShowError() && validateExpiryDate() && validateCVV();

        if (!isFormValid) {
            event.preventDefault();
        }
    });
}

function validateExpiryDate() {
    const expiryInput = document.getElementById('card-expire');
    const errorIcon = document.getElementById('expiry-error-icon');
    const errorMsg = document.getElementById('expiry-error');
    const regex = /^(0[1-9]|1[0-2])\/([0-9]{2})$/;

    expiryInput.addEventListener('input', function () {
        const value = expiryInput.value;
        expiryInput.setCustomValidity('');
        errorMsg.style.display = 'none';
        errorIcon.style.display = 'none';

        if (value.trim() === '') {
            expiryInput.setCustomValidity('This field is required.');
        } else if (regex.test(value)) {
            const [month, year] = value.split('/');
            const currentYear = new Date().getFullYear() % 100;
            const currentMonth = new Date().getMonth() + 1;
            const inputMonth = parseInt(month, 10);
            const inputYear = parseInt(year, 10);

            if (inputYear < currentYear || (inputYear === currentYear && inputMonth < currentMonth)) {
                expiryInput.setCustomValidity('The expiry date cannot be in the past.');
            }
        } else {
            expiryInput.setCustomValidity('Please enter a valid date in MM/YY format.');
        }
        
        errorMsg.textContent = expiryInput.validationMessage;
        if (expiryInput.validationMessage) {
            errorMsg.style.display = 'block';
            errorIcon.style.display = 'block';
        }
    });

    return expiryInput.checkValidity();
}

function validateCVV() {
    const cvvInput = document.getElementById('card-cvc');
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
    validateAndSubmitForm()
});

