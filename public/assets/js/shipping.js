
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
document.addEventListener('DOMContentLoaded', function(){
    //handle cart and price
    
    
    fetchCart();
   
})
function fetchCart() {
    console.log('fetch cart');
    var xhr = new XMLHttpRequest();

    
    xhr.open('GET', '/BTL_LTW/LTWeb/shipping/cart', true); 
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                
                generateCartItems(JSON.parse(xhr.responseText));
                updateCartSummary();
            } else {
                
                console.error('Failed to fetch reviews: ' + xhr.status);
            }
        }
    };
    xhr.send();
}
function generateCartItems(cartData) {
    var cartListContainer = document.querySelector('.cart-info__list');
    cartListContainer.innerHTML = ''; 

    cartData.forEach(function(item, index) {
        var article = document.createElement('article');
        article.classList.add('cart-item');
        article.innerHTML = `
            <label class="cart-info__checkbox">
                <input name="check-item" id='check${index+1}'value="${item.PID}-${item.size}" type="checkbox" class="cart-info__checkbox-input" />
            </label>
            <a href="/BTL_LTW/LTWeb/detail?id=${item.PID}">
                <img src="${item.image}" alt="" class="cart-item__thumb" />
            </a>
            <div class="cart-item__content">
                <div class="cart-item__content-left">
                    <h3 class="cart-item__title">
                        <a href="/BTL_LTW/LTWeb/detail?id=${item.PID}">
                            ${item.name} (${item.size})
                        </a>
                    </h3>
                    <p class="cart-item__price-wrap" id="priceWrap${index+1}">
                        $${item.listed_unit_price} (${item.discount}% discount) | <span class="cart-item__status">In Stock</span>
                    </p>
                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                        <div class="cart-item__input">
                            <button class="cart-item__input-btn" onclick="descreaseQuantity(${index + 1})">
                                <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="" />
                            </button>
                            <input type="number" onchange="updateTotalPrice(${item.PID}) handleQuantityInput(${index+1})" class="quantity-input" id="quantity${index + 1}" value="${item.quantity}" min="1"/>
                            <button class="cart-item__input-btn" onclick="increaseQuantity(${index + 1})">
                                <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="cart-item__content-right">
                    <p class="cart-item__total-price" id="totalPrice${index+1}">$${(item.listed_unit_price * (100 - item.discount) / 100 * item.quantity).toFixed(2)}</p>
                    <div class="cart-item__ctrl">
                        <button class="cart-item__ctrl-btn">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/heart-2.svg" alt="" />
                            Save
                        </button>
                        <button class="cart-item__ctrl-btn" onclick=deleteFromCart(${item.PID},'${item.size}')>
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/trash.svg" alt="" />
                            Delete
                        </button>
                    </div>
                </div>
            </div>`;
        var checkbox = article.querySelector(`#check${index+1}`);
        checkbox.addEventListener('change', function(event) {
            updateCartSummary();

        });
        cartListContainer.appendChild(article);
    });
}
//validate input của quantity
function handleQuantityInput(id) {
    quantity = document.getElementById("quantity" + id);
    if (quantity.value < 1 || quantity.value == "") {
        quantity.value = 1;
    }
}
function updateTotalPrice(id ) {
    var quantity = parseInt(document.getElementById("quantity" + id).value);
    var priceWrap = document.getElementById("priceWrap" + id).textContent;
    var unitPrice = parseFloat(priceWrap.match(/\$(\d+(\.\d+)?)/)[1]);
    var discount = parseFloat(priceWrap.match(/\((\d+)% discount\)/)[1]);
    var totalPrice = unitPrice * (100 - discount) / 100 * quantity;
    document.getElementById("totalPrice" + id).textContent = '$' + totalPrice.toFixed(2);

    console.log('updaatettottal')
    updateCartSummary();        
}

//tăng/giảm quantity khi ấn + -
function descreaseQuantity(id) {
    quantity = document.getElementById("quantity" + id);
    if (quantity.value > 1) {
        quantity.value--;
    }
    updateTotalPrice(id);
}
function increaseQuantity(id) {
    quantity = document.getElementById("quantity" + id);
    quantity.value++;
    updateTotalPrice(id);
}
function updateCartSummary() {
    var subtotal = 0;
    var checkboxes = document.querySelectorAll('input[name="check-item"]:checked');

    checkboxes.forEach(function(checkbox) {
        var itemIndex = checkbox.id.replace('check', '');
        var totalPriceElement = document.getElementById(`totalPrice${itemIndex}`);
        var totalPrice = parseFloat(totalPriceElement.textContent.replace('$', ''));
        subtotal += totalPrice;
    });


    var subtotalAmountElements = document.getElementsByClassName('subtotalAmount');
    Array.from(subtotalAmountElements).forEach(function(subtotalAmount) {
        subtotalAmount.textContent = '$' + subtotal.toFixed(2);
    });
    

    var shipping = 10; 
    var total = subtotal + shipping;
    var totalAmountElements = document.getElementsByClassName('totalAmount');
    Array.from(totalAmountElements).forEach(function(totalAmount) {
        totalAmount.textContent = '$' + total.toFixed(2);
    });
    document.getElementById('numOfItem').innerHTML=checkboxes.length;
}
function deleteFromCart(PID,size){
    var xhr = new XMLHttpRequest();

    var data = JSON.stringify({ "PID": PID ,'size':size});
    xhr.open('POST', '/BTL_LTW/LTWeb/shipping/delete_from_cart', true); 
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                
                alert(xhr.responseText);
                fetchCart();
            
            } else {
                
                console.error('Failed to fetch reviews: ' + xhr.status);
            }
        }
    };
    xhr.send(data);
}
document.addEventListener('DOMContentLoaded', function() {
    var checkoutLink = document.getElementById('checkout-link');
    checkoutLink.addEventListener('click', function(event) {
        
        event.preventDefault();
        var checkedAddressRadio = document.querySelector('input[name="shipping-address"]:checked');

        // Check if any address is selected
        if (checkedAddressRadio === null) {
            alert('No shipping address selected');
            return;
        }
        var selectedAddress = checkedAddressRadio.value;
        var checkedCheckboxes = document.querySelectorAll('input[name="check-item"]:checked');
        var index=document.querySelectorAll('input[name="check-item"]:checked')[0].id.replace('check','');
        // Check if any checkbox is selected
        if (checkedCheckboxes.length === 0) {
            alert('No items selected');
            return;
        }

        // Prepare an array to store selected product IDs and sizes
        var selectedItems = [];

        // Loop through each checked checkbox
        checkedCheckboxes.forEach(function(checkbox) {
            var index=checkbox.id.replace('check','');
            var quantity=document.getElementById('quantity'+index).value;
            var valueParts = checkbox.value.split('-');
            var PID = valueParts[0];
            var size = valueParts[1];
            selectedItems.push({ PID: PID, size: size,quantity:quantity });
        });
        var data = {
            items: selectedItems,
            AID:selectedAddress,
        };
        var xhr = new XMLHttpRequest();

        data = JSON.stringify(data);
        xhr.open('POST', '/BTL_LTW/LTWeb/shipping/new_bill', true); 
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    
                    // alert(xhr.responseText);
                    window.location.href = "/BTL_LTW/LTWeb/payment?BID="+xhr.responseText;
                } else {
                    
                    console.error('Failed to checkout: ' + xhr.status);
                }
            }
        };
        xhr.send(data);
    })
})