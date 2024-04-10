
document.addEventListener('DOMContentLoaded', function() {
    var cityInput = document.getElementById('city');
    var cityDialog = document.getElementById('city-dialog');
    var cityOptions = cityDialog.querySelectorAll('.form__option');
    cityInput.addEventListener('click', function(event) {
        cityDialog.classList.remove('hidden');
        event.stopPropagation();
    });
    cityOptions.forEach(function(option) {
        option.addEventListener('click', function() {
            cityOptions.forEach(function(opt) {
                opt.classList.remove('form__option--current');
            });
            this.classList.add('form__option--current');
            cityInput.value = this.textContent;
        });
    });
    document.addEventListener('click', function(event) {
        if (!cityDialog.contains(event.target) && !cityInput.contains(event.target)) {
            cityDialog.classList.add('hidden');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {

    var form = document.getElementById('shippingForm');
    var nameInput = document.getElementById('name');
    var phoneInput = document.getElementById('phone');
    var addressInput = document.getElementById('address');
    var cityInput = document.getElementById('city');
    var createButton = document.getElementById('createButton');
    var modal = document.getElementById('add-new-address')
    
    function validateInputs() {
        
        var inputs = [nameInput, phoneInput, addressInput, cityInput];
        var errorShown = false; 
    
        
        for (var i = 0; i < inputs.length; i++) {
            var input = inputs[i];
            
          
            if (input.value.trim() === '') {
               
                if (!errorShown) {
                    displayError(input, 'The input field is required');
                    errorShown = true; 
                }
                return false; 
            }
        }
    
        return true; 
    }
   
    function displayError(input, message) {
        var errorElement = input.closest('.form__group').querySelector('.form__error');
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }

 
    function hideError(input) {
        var errorElement = input.closest('.form__group').querySelector('.form__error');
        errorElement.textContent = '';
        errorElement.style.display = 'none';
    }

 
    form.addEventListener('submit', function(event) {

        if (!validateInputs()) {
            event.preventDefault();
        }
    });

    createButton.addEventListener('click', function(event) {
        event.preventDefault(); 

        if (!validateInputs()) {
            if (modal.classList.contains('hide')) {
                modal.classList.remove('hide');
                modal.classList.add('show');
            }
        } else {
            if (modal.classList.contains('show')) {
                modal.classList.remove('show');
                modal.classList.add('hide');
            }
        }
    });

    nameInput.addEventListener('input', function() {
        if (nameInput.value.trim() !== '') {
            hideError(nameInput);
        }
    });

    phoneInput.addEventListener('input', function() {
        if (phoneInput.value.trim() !== '') {
            hideError(phoneInput);
        }
    });

    addressInput.addEventListener('input', function() {
        if (addressInput.value.trim() !== '') {
            hideError(addressInput);
        }
    });

    cityInput.addEventListener('input', function() {
        if (cityInput.value.trim() !== '') {
            hideError(cityInput);
        }
    });
});
