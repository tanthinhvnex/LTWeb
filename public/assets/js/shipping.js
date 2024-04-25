
document.addEventListener('DOMContentLoaded', function() {
    
    var cityInput = document.getElementById('city');
    var cityDialog = document.getElementById('city-dialog');
    var cityOptions = cityDialog.querySelectorAll('.form__option');



    cityOptions.forEach(function(option) {
        option.addEventListener('click', function() {
            cityOptions.forEach(function(opt) {
                opt.classList.remove('form__option--current');
            });
            this.classList.add('form__option--current');
            cityInput.value = this.textContent;
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {

    var form = document.getElementById('shippingForm');
    var nameInput = document.getElementById('name');
    var phoneInput = document.getElementById('phone');
    var addressInput = document.getElementById('address');
    var cityInput = document.getElementById('city');
    var createButton = document.getElementById('createButton');
    var listEditButton=document.getElementsByName('editAddress');
    var addButton=document.getElementsByName('addAddress')[0];
    var modal = document.getElementById('add-new-address')
    var cityOptions = document.querySelectorAll('#city-dialog-list .form__option');
    var cityDialog = document.getElementById('city-dialog');
    var formError = Array.from(document.getElementsByClassName('form__error'));
    document.getElementById('cancelAddEdit').addEventListener('click',function(){
        formError.forEach(function(error){
            error.style.display = 'none';
        })
    })
    function validateInputs() {
        var inputs = [nameInput, phoneInput, addressInput, cityInput];
        var errorShown = false; 
    
        
        for (var i = 0; i < inputs.length; i++) {
            var input = inputs[i];
            
          
            if (input.value.trim() === ''||!input.validity.valid) {
               
                if (!errorShown) {
                    displayError(input);
                    errorShown = true; 
                }
            }
        }
    
        return !errorShown; 
    }
   
    function displayError(input) {
        var errorElement = input.closest('.form__group').querySelector('.form__error');
        errorElement.style.display = 'block';
    }

 
    function hideError(input) {
        var errorElement = input.closest('.form__group').querySelector('.form__error');
        errorElement.style.display = 'none';
    }

 
    form.addEventListener('submit', function(event) {
        console.log("submit");
        
        if (!validateInputs()) {
            event.preventDefault();
        }
        else{
            form.submit();
        }
    });

    createButton.addEventListener('click', function(event) {
        
        
        if (!validateInputs()) {

            event.preventDefault(); 
        } else {
            // submitForm();
            form.submit();
            if (modal.classList.contains('show')) {
                modal.classList.remove('show');
                modal.classList.add('hide');
            }
            
        }
    });
    listEditButton.forEach(function(editButton) {
        editButton.addEventListener('click', function() {
            var heading = document.getElementsByClassName('modal__heading')[0];
            heading.textContent = "Edit shipping address";
            document.getElementById("createButton").textContent = "Save changes";
            form.setAttribute('action', '/BTL_LTW/LTWeb/shipping/edit_address');

            var addressId = this.getAttribute('address-id');
            console.log('Edit button clicked for address ID:', addressId);
            console.log(listAddress);
            var address = listAddress.find(function(address) {
                return address.AID == addressId;
            });
            var addressJson = JSON.stringify(address);
            document.getElementsByName('addressToEdit')[0].value = addressJson;
            nameInput.value=address.receiverName;
            phoneInput.value=address.receiverPhone;
            addressInput.value=address.additionalAddressInfo;
            cityInput.value=address.cityDistrictTown;
            document.getElementsByName('isDefault')[0].checked =(address.isDefault == 1);
        });
    });
    
    addButton.addEventListener('click',function(){
        var headings = document.getElementsByClassName('modal__heading');
        headings[0].textContent = "Add new shipping address";
        document.getElementById("createButton").textContent = "Create";
        form.setAttribute('action', '/BTL_LTW/LTWeb/shipping/add_new_address');
        form.reset(); 
    })

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

    cityInput.addEventListener('change', function() {
        if (cityInput.value.trim() !== '') {
            hideError(cityInput);
        }
    });
    cityOptions.forEach(function(option) {
        
        option.addEventListener('click', function() {
            
            cityInput.value = this.textContent.trim();
            cityInput.dispatchEvent(new Event('change'));
            cityDialog.classList.remove('show');
            cityDialog.classList.add('hide');
        });
    });
});
