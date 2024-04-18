document.addEventListener('DOMContentLoaded', function () {
    validateAndSubmitForm();
});

function validateAndSubmitForm() {
    const submitButton = document.querySelector('.cart-info__next-btn');

    function hideError(input) {
        const errorParagraph = input.closest('.form__group').querySelector('.form__error');
        errorParagraph.style.display = 'none';
    }

    function checkFirstEmptyInputAndShowError() {
        const inputs = document.querySelectorAll('.form__input');
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

    function validateCVV() {
        const cvvInput = document.getElementById('card-cvv');
        const errorMsg = cvvInput.closest('.form__group').querySelector('.form__error');

        cvvInput.setCustomValidity('');
        errorMsg.style.display = 'none';

        if (cvvInput.value.trim() === '') {
            cvvInput.setCustomValidity('This field is required.');
            errorMsg.textContent = 'This field is required';
        } else if (!/^\d{3,4}$/.test(cvvInput.value)) {
            cvvInput.setCustomValidity('CVV must be 3 or 4 digits.');
            errorMsg.textContent = 'CVV must be 3 or 4 digits.';
        }

        if (!cvvInput.checkValidity()) {
            errorMsg.style.display = 'block';
            cvvInput.focus();
            return false;
        }
        return true;
    }

    function validateExpirationDate() {
        const expirationDateInput = document.getElementById('expiration-date');
        const errorMsg = expirationDateInput.closest('.form__group').querySelector('.form__error');
        const expirationDateRegex = /^(0[1-9]|1[0-2])\/(\d{2})$/;
        const matches = expirationDateInput.value.match(expirationDateRegex);
    
        errorMsg.style.display = 'none';
        expirationDateInput.setCustomValidity('');
    
        if (!matches) {
            expirationDateInput.setCustomValidity('Invalid date format. Use MM/YY.');
            errorMsg.textContent = 'Invalid date format. Use MM/YY.';
        } else {
            const expMonth = parseInt(matches[1], 10);
            const expYear = parseInt('20' + matches[2], 10); 
            const expDate = new Date(expYear, expMonth, 0); 
            const currentDate = new Date();
            const currentYear = currentDate.getFullYear();
            const currentMonth = currentDate.getMonth() + 1; 
    
            if (expYear < currentYear || (expYear === currentYear && expMonth < currentMonth)) {
                expirationDateInput.setCustomValidity('Expiration date must be in the future.');
                errorMsg.textContent = 'Expiration date must be in the future.';
            }
        }
    
        if (!expirationDateInput.checkValidity()) {
            errorMsg.style.display = 'block';
            expirationDateInput.focus();
            return false;
        }
        return true;
    }
    submitButton.addEventListener('click', function (event) {
        const isFormValid = checkFirstEmptyInputAndShowError() && validateCVV() && validateExpirationDate();

        if (!isFormValid) {
            event.preventDefault();
        }
    });

    document.querySelectorAll('.form__input').forEach(input => {
        input.addEventListener('input', () => hideError(input));
    });
}
