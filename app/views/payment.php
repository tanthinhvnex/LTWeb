<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment | Grocery Mart</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/BTL_LTW/LTWeb/public/assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/BTL_LTW/LTWeb/public/assets/favicon/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Fonts -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/fonts/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/css/main.css" />

    <!-- Scripts -->
    <script src="/BTL_LTW/LTWeb/public/assets/js/scripts.js"></script>
</head>

<body>
    <!-- Header -->
    <header id="header" class="header"></header>
    <script>
        load("#header", "/BTL_LTW/LTWeb/app/views/components/header-logined.php");
    </script>

    <!-- MAIN -->
    <main class="checkout-page">
        <div class="container">
            <!-- Search bar -->
            <div class="checkout-container">
                <div class="search-bar d-none d-md-flex">
                    <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="/BTL_LTW/LTWeb/public/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                    </button>
                </div>
            </div>

            <!-- Breadcrumbs -->
            <div class="checkout-container">
                <ul class="breadcrumbs checkout-page__breadcrumbs">
                    <li>
                        <a href="/BTL_LTW/LTWeb/" class="breadcrumbs__link">
                            Home
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/BTL_LTW/LTWeb/shipping" class="breadcrumbs__link">
                            Checkout
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/BTL_LTW/LTWeb/shipping" class="breadcrumbs__link">
                            Shipping
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Payment method</a>
                    </li>
                </ul>
            </div>

            <!-- Checkout content -->
            <div class="checkout-container">
                <div class="row gy-xl-3">
                    <div class="col-8 col-lg-12">
                        <div class="cart-info">
                            <div class="cart-info__top">
                                <h2 class="cart-info__heading cart-info__heading--lv2">
                                    1. Shipping, arrives between Mon, May 16—Tue, May 24
                                </h2>
                                <a class="cart-info__edit-btn" href="/BTL_LTW/LTWeb/shipping">
                                    <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/edit.svg" alt="" />
                                    Edit
                                </a>
                            </div>

                            <!-- Payment item 1 -->
                            <article class="payment-item">
                                <div class="payment-item__info">
                                    <h3 class="payment-item__title"><?= htmlspecialchars($info->receiverName) ?> </h3>
                                    <p class="payment-item__desc"><?= htmlspecialchars($info->additional_address_info) ?> </p>
                                </div>
                            </article>

                            <!-- Payment item 2 -->
                            <article class="payment-item">
                                <div class="payment-item__info">
                                    <h3 class="payment-item__title">Items details</h3>
                                    <p class="payment-item__desc"> <?= htmlspecialchars($info->numberItem) ?> items</p>
                                </div>
                                <a href="/BTL_LTW/LTWeb/shipping" class="payment-item__detail">View details</a>
                            </article>
                        </div>

                        <div class="cart-info">
                            <h2 class="cart-info__heading cart-info__heading--lv2">2. Shipping method</h2>
                            <div class="cart-info__separate"></div>
                            <h3 class="cart-info__sub-heading">Availeble Shipping method</h3>
                            <!-- Payment item 3 (Fedex Delivery) -->
                            <label>
                                <article class="payment-item payment-item--pointer">
                                    <img src="/BTL_LTW/LTWeb/public/assets/img/payment/delivery-1.png" alt="Fedex Delivery" class="payment-item__thumb" />
                                    <div class="payment-item__content">
                                        <div class="payment-item__info">
                                            <h3 class="payment-item__title">Fedex Delivery</h3>
                                            <p class="payment-item__desc payment-item__desc--low">
                                                Delivery: 2-3 days work
                                            </p>
                                        </div>
                                        <span class="cart-info__checkbox payment-item__checkbox">
                                            <input type="radio" name="delivery-method" checked data-cost="0"
                                                class="cart-info__checkbox-input payment-item__checkbox-input" />
                                            <span class="payment-item__cost">Free</span>
                                        </span>
                                    </div>
                                </article>
                            </label>

                            <!-- Payment item 4 (DHL Delivery) -->
                            <label>
                                <article class="payment-item payment-item--pointer">
                                    <img src="/BTL_LTW/LTWeb/public/assets/img/payment/delivery-2.png" alt="DHL Delivery" class="payment-item__thumb" />
                                    <div class="payment-item__content">
                                        <div class="payment-item__info">
                                            <h3 class="payment-item__title">DHL Delivery</h3>
                                            <p class="payment-item__desc payment-item__desc--low">
                                                Delivery: 2-3 days work
                                            </p>
                                        </div>
                                        <span class="cart-info__checkbox payment-item__checkbox">
                                            <input type="radio" name="delivery-method" data-cost="12"
                                                class="cart-info__checkbox-input payment-item__checkbox-input" />
                                            <span class="payment-item__cost">$12.00</span>
                                        </span>
                                    </div>
                                </article>
                            </label>
                        </div>
                    </div>
                    <div class="col-4 col-lg-12">
                            <div class="cart-info">
                                <h2 class="cart-info__heading cart-info__heading--lv2">Payment Details</h2>
                                <p class="cart-info__desc">
                                    Complete your purchase item by providing your payment details order.
                                </p>
                                <form action="/BTL_LTW/LTWeb/payment" method="post" class="form cart-info__form">
                                    <div class="form__group">
                                        <label for="email" class="form__label form__label--medium">Email Address</label>
                                        <div class="form__text-input">
                                            <input type="email" name="email" id="email" placeholder="Email"
                                                class="form__input" required />
                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt=""
                                                class="form__input-icon-error" />
                                        </div>
                                        <p class="form__error">Password must be at least 6 characters</p>
                                    </div>
                                    <div class="form__group">
                                        <label for="card-holder" class="form__label form__label--medium">
                                            Card Holder
                                        </label>
                                        <div class="form__text-input">
                                            <input type="text" name="card-holder" id="card-holder" placeholder="Card Holder"
                                                class="form__input" required />
                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt=""
                                                class="form__input-icon-error" />
                                        </div>
                                        <p class="form__error">Password must be at least 6 characters</p>
                                    </div>
                                    <div class="form__group">
                                        <label for="card-details" class="form__label form__label--medium">
                                            Card Details
                                        </label>
                                        <div class="form__text-input">
                                            <input type="text" name="card-number" id="card-number"
                                                placeholder="Card Number" class="form__input" required/>
                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt=""
                                                class="form__input-icon-error" />
                                        </div>
                                        <p class="form__error" id="number-error">This field is required</p>
                                    </div>
                                    <div class="form__row cart-info__form-row">
                                        <div class="form__group">
                                            <div class="form__text-input">
                                                <input type="text" name="card-expire" id="card-expire" placeholder="MM/YY"
                                                    class="form__input" required />
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt=""
                                                    class="form__input-icon-error" id="expiry-error-icon" style="display: none;"/>
                                            </div>
                                            <p class="form__error" id="expiry-error">The expiry date must be in the future.</p>
                                        </div>
                                        <div class="form__group">
                                            <div class="form__text-input">
                                                <input type="text" name="card-cvc" id="card-cvc" placeholder="CVC"
                                                    class="form__input" required />
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt=""
                                                    class="form__input-icon-error" id="cvc-error-icon"/>
                                            </div>
                                            <p class="form__error" id = 'cvc-error'>Password must be at least 6 characters</p>
                                        </div>
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Subtotal <span class="cart-info__sub-label"></span></span>
                                        <span><?= htmlspecialchars($info->numberItem) ?></span>
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Price <span class="cart-info__sub-label"></span></span>
                                        <span id= "base-price">$<?= htmlspecialchars(number_format($info->priceAllItem, 2, '.', ',')) ?></span>
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Shipping</span>
                                        <span id="shipping-cost">$0.00</span>
                                        <input type="hidden" name="shippingCost" id="shippingCostInput" value="0">
                                        
                                    </div>
                                    <div class="cart-info__separate"></div>
                                    <div class="cart-info__row">
                                        <span>Estimated Total</span>
                                        <span id="estimated-total"></span>
                                    </div>
                                    
                                    <button type="submit" class="cart-info__next-btn btn btn--primary btn--rounded" id="pay-button" style="width: 100%;">Pay</button>
                                </form>
                            </div>
                            <div class="cart-info">
                                <a href="#!">
                                    <article class="gift-item">
                                        <div class="gift-item__icon-wrap">
                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/gift.svg" alt="" class="gift-item__icon" />
                                        </div>
                                        <div class="gift-item__content">
                                            <h3 class="gift-item__title">Send this order as a gift.</h3>
                                            <p class="gift-item__desc">
                                                Available items will be shipped to your gift recipient.
                                            </p>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
        load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
    </script>

    <!-- Modal: confirm remove shopping cart item -->
    <div id="delete-confirm" class="modal modal--small hide">
        <div class="modal__content">
            <p class="modal__text">Do you want to remove this item from shopping cart?</p>
            <div class="modal__bottom">
                <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-confirm">
                    Cancel
                </button>
                <button class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin js-toggle"
                    toggle-target="#delete-confirm">
                    Delete
                </button>
            </div>
        </div>
        <div class="modal__overlay js-toggle" toggle-target="#delete-confirm"></div>
    </div>

    <!-- Modal: address new shipping address -->
    <div id="add-new-address" class="modal hide" style="--content-width: 650px">
        <div class="modal__content">
            <form action="" class="form">
                <h2 class="modal__heading">Add new shipping address</h2>
                <div class="modal__body">
                    <div class="form__row">
                        <div class="form__group">
                            <label for="name" class="form__label form__label--small">Name</label>
                            <div class="form__text-input form__text-input--small">
                                <input type="text" name="name" id="name" placeholder="Name" class="form__input" required
                                    minlength="2" />
                                <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Name must be at least 2 characters</p>
                        </div>
                        <div class="form__group">
                            <label for="phone" class="form__label form__label--small">Phone</label>
                            <div class="form__text-input form__text-input--small">
                                <input type="tel" name="phone" id="phone" placeholder="Phone" class="form__input"
                                    required minlength="10" />
                                <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Phone must be at least 10 characters</p>
                        </div>
                    </div>
                    <div class="form__group">
                        <label for="address" class="form__label form__label--small">Address</label>
                        <div class="form__text-area">
                            <textarea name="address" id="address" placeholder="Address (Area and street)"
                                class="form__text-area-input" required></textarea>
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                        </div>
                        <p class="form__error">Address not empty</p>
                    </div>
                    <div class="form__group">
                        <label for="city" class="form__label form__label--small">City/District/Town</label>
                        <div class="form__text-input form__text-input--small">
                            <input type="text" name="" placeholder="City/District/Town" id="city"
                                class="form__input js-toggle" toggle-target="#city-dialog" />
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />

                            <!-- Select dialog -->
                            <div id="city-dialog" class="form__select-dialog hide">
                                <h2 class="form__dialog-heading d-none d-sm-block">City/District/Town</h2>
                                <button class="form__close-dialog d-none d-sm-block js-toggle"
                                    toggle-target="#city-dialog">
                                    &times
                                </button>
                                <div class="form__search">
                                    <input type="text" placeholder="Search" class="form__search-input" />
                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/search.svg" alt="" class="form__search-icon icon" />
                                </div>
                                <ul class="form__options-list">
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option form__option--current">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                    <li class="form__option">Ha Noi</li>
                                    <li class="form__option">Ho Chi Minh</li>
                                    <li class="form__option">Da Nang</li>
                                </ul>
                            </div>
                        </div>
                        <p class="form__error">Phone must be at least 11 characters</p>
                    </div>
                    <div class="form__group form__group--inline">
                        <label class="form__checkbox">
                            <input type="checkbox" name="" id="" class="form__checkbox-input d-none" />
                            <span class="form__checkbox-label">Set as default address</span>
                        </label>
                    </div>
                </div>
                <div class="modal__bottom">
                    <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                        Cancel
                    </button>
                    <button class="btn btn--small btn--primary modal__btn btn--no-margin">Create</button>
                </div>
            </form>
        </div>
        <div class="modal__overlay"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        validateAndSubmitForm();
    });

    function validateAndSubmitForm() {
        const submitButton = document.querySelector('.cart-info__next-btn');
        const inputs = document.querySelectorAll('.form__input');

        function hideError(input) {
            const errorParagraph = input.closest('.form__group').querySelector('.form__error');
            const errorIcon = input.nextElementSibling;
            errorParagraph.style.display = 'none';
            errorIcon.style.display = 'none';
        }

        function checkFirstEmptyInputAndShowError() {
            for (let input of inputs) {
                if (input.value.trim() === '') {
                    const errorParagraph = input.closest('.form__group').querySelector('.form__error');
                    const errorIcon = input.nextElementSibling;
                    errorParagraph.textContent = 'This field is required';
                    errorParagraph.style.display = 'block';
                    errorIcon.style.display = 'block';
                    input.focus();
                    return false;
                }
            }
            return true;
        }

        function validateCardNumber() {
            const cardNumberInput = document.getElementById('card-number');
            const errorIcon = cardNumberInput.nextElementSibling;
            const errorMsg = cardNumberInput.closest('.form__group').querySelector('.form__error');

            cardNumberInput.addEventListener('input', function() {
                const value = cardNumberInput.value;
                cardNumberInput.setCustomValidity('');
                errorMsg.style.display = 'none';
                errorIcon.style.display = 'none';

                if (value.trim() === '') {
                    cardNumberInput.setCustomValidity('This field is required.');
                } else if (!/^\d{16}$/.test(value)) {
                    cardNumberInput.setCustomValidity('Card number must be exactly 16 digits.');
                }

                errorMsg.textContent = cardNumberInput.validationMessage;
                if (cardNumberInput.validationMessage) {
                    errorMsg.style.display = 'block';
                    errorIcon.style.display = 'block';
                }
            });

            return cardNumberInput.checkValidity();
        }

        function validateExpiryDate() {
            const expiryInput = document.getElementById('card-expire');
            const errorIcon = expiryInput.nextElementSibling;
            const errorMsg = expiryInput.closest('.form__group').querySelector('.form__error');
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
            const errorIcon = cvvInput.nextElementSibling;
            const errorMsg = cvvInput.closest('.form__group').querySelector('.form__error');

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

        inputs.forEach(input => {
            if (input.id !== 'card-expire' && input.id !== 'card-cvc' && input.id !== 'card-number') {
                input.addEventListener('input', () => hideError(input));
            }
        });

        validateExpiryDate();
        validateCVV();
        validateCardNumber();

        submitButton.addEventListener('submit', function (event) {
            const isFormValid = checkFirstEmptyInputAndShowError() && validateExpiryDate() && validateCVV() && validateCardNumber();

            if (!isFormValid) {
                event.preventDefault();
            }
            else {
                window.location.href = '/BTL_LTW/LTWeb/';
            }
        });
    }
    

    document.addEventListener('DOMContentLoaded', function() {
        var radios = document.querySelectorAll('.payment-item__checkbox-input');
        function updateShippingCost() {
            var cost = this.getAttribute('data-cost');
            document.getElementById('shipping-cost').textContent = `$${parseFloat(cost).toFixed(2)}`;
        }
        radios.forEach(function(radio) {
            radio.addEventListener('change', updateShippingCost);
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        var radios = document.querySelectorAll('.payment-item__checkbox-input');
        var basePriceElement = document.getElementById('base-price');
        var shippingCostElement = document.getElementById('shipping-cost');
        var totalElement = document.getElementById('estimated-total');
        var payButton = document.getElementById('pay-button'); 

        function calculateTotal() {
            var basePrice = parseFloat(basePriceElement.textContent.replace('$', ''));
            var shippingCost = parseFloat(shippingCostElement.textContent.replace('$', ''));
            var total = basePrice + shippingCost;
            var formattedTotal = `$${total.toFixed(2)}`;

            totalElement.textContent = formattedTotal;  
            payButton.textContent = `Pay ${formattedTotal}`; 
        }

        function updateShippingCost() {
            var cost = parseFloat(this.getAttribute('data-cost'));
            shippingCostElement.textContent = `$${cost.toFixed(2)}`;
            calculateTotal();
        }


        radios.forEach(function(radio) {
            radio.addEventListener('change', updateShippingCost);
        });


        calculateTotal();
    });
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.cart-info__form');
        const params = new URLSearchParams(window.location.search);
        const id = params.get('id');

        if (id) {
            const currentAction = form.getAttribute('action');
            form.setAttribute('action', `${currentAction}?id=${id}`);
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        var radios = document.querySelectorAll('.payment-item__checkbox-input');
        var shippingCostDisplay = document.getElementById('shipping-cost'); 
        var shippingCostInput = document.getElementById('shippingCostInput'); 


        shippingCostDisplay.textContent = '$0.00';
        shippingCostInput.value = '0.00';


        function updateShippingCost() {
            var cost = parseFloat(this.dataset.cost).toFixed(2); 
            shippingCostDisplay.textContent = `$${cost}`;
            shippingCostInput.value = cost; 
        }


        radios.forEach(function(radio) {
            radio.addEventListener('change', updateShippingCost);
        });
    });
    </script>
</body>

</html>