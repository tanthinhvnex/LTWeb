<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shipping | Grocery Mart</title>

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
                        <a href="/BTL_LTW/LTWeb/checkout" class="breadcrumbs__link">
                            Checkout
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Shipping</a>
                    </li>
                </ul>
            </div>

            <!-- Checkout content -->
            <div class="checkout-container">
                <div class="row gy-xl-3">
                    <div class="col-8 col-xl-12">
                        <div class="cart-info">
                            <h1 class="cart-info__heading">1. Shipping, arrives between Mon, May 16—Tue, May 24</h1>
                            <div class="cart-info__separate"></div>
                            
                            <!-- Checkout address -->
                            <div class="user-address">
                                <div class="user-address__top">
                                    <div>
                                        <h2 class="user-address__title">Shipping address</h2>
                                        <p class="user-address__desc">Where should we deliver your order?</p>
                                    </div>
                                    <button type='button' class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                                        toggle-target="#add-new-address" id = "open-modal" name='addAddress'>
                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                                        Add a new address
                                    </button>
                                </div>
                                <div class="user-address__list">
                                    <?php
                                    // Check if there are addresses in the list
                                    if (!empty($listAddress)) {
                                       
                                        foreach ($listAddress as $address) {
                                            ?>
                                            <!-- Address card -->
                                            <article class="address-card">
                                                <div class="address-card__left">
                                                    <div class="address-card__choose">
                                                        <label class="cart-info__checkbox">
                                                            <input type="radio" name="shipping-address" value=<?php echo $address->AID?> class="cart-info__checkbox-input" 
                                                            <?php echo ($address->isDefault == 1) ? 'checked' : ''; ?>/>
                                                        </label>
                                                    </div>
                                                    <div class="address-card__info">
                                                        <h3 class="address-card__title"><?php echo $address->receiverName; ?></h3>
                                                        <p class="address-card__desc">
                                                            <?php echo $address->additionalAddressInfo . ', ' . $address->cityDistrictTown; ?>
                                                        </p>
                                                        <ul class="address-card__list">
                                                            <li class="address-card__list-item">Shipping</li>
                                                            <li class="address-card__list-item">Delivery from store</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="address-card__right">
                                                    <div class="address-card__ctrl">
                                                        <button type='button' class="cart-info__edit-btn js-toggle" name='editAddress'
                                                        address-id="<?php echo $address->AID; ?>" toggle-target="#add-new-address">
                                                            <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/edit.svg" alt="" />
                                                            Edit
                                                        </button>
                                                    </div>
                                                </div>
                                            </article>
                                            <?php
                                        }
                                    } else {
                                        // If there are no addresses, display a message
                                        ?>
                                        <!-- Empty message -->
                                        <p class="user-address__message">
                                            Not address yet.
                                            <a class="user-address__link js-toggle" href="#!" toggle-target="#add-new-address">Add a new address</a>
                                        </p>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>


                            <div class="cart-info__separate"></div>

                            <h2 class="cart-info__sub-heading">Items details</h2>
                            <div class="cart-info__check-all">
                                <label class="cart-info__checkbox">
                                    <input onChange="checkAll()" id="check-all" type="checkbox" name="shipping-adress" class="cart-info__checkbox-input" />
                                </label>
                            </div>
                            <div class="cart-info__list">
                                <!-- Cart item 1 -->
                                <article class="cart-item">
                                    <label class="cart-info__checkbox">
                                        <input name="check-item" type="checkbox" name="shipping-adress" class="cart-info__checkbox-input" />
                                    </label>
                                    <a href="/BTL_LTW/LTWeb/detail?id=1">
                                        <img src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png" alt="" class="cart-item__thumb" />
                                    </a>
                                    <div class="cart-item__content">
                                        <div class="cart-item__content-left">
                                            <h3 class="cart-item__title">
                                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                                    Coffee Beans - Espresso Arabica and Robusta Beans
                                                </a>
                                            </h3>
                                            <p class="cart-item__price-wrap">
                                                $47.00 | <span class="cart-item__status">In Stock</span>
                                            </p>
                                            <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                <!-- <div class="cart-item__input">
                                                    LavAzza
                                                    <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down-2.svg" alt="" />
                                                </div> -->
                                                <div class="cart-item__input">
                                                    <button class="cart-item__input-btn" onclick="descreaseQuantity(1)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="" />
                                                    </button>
                                                    <!-- <span style="width: 20px; text-align: center;" id="quantity1">1</span> -->
                                                    <input type="number" onchange="handleQuantityInput(1)" class="quantity-input" id="quantity1" value="1" min="1"/>
                                                    <button class="cart-item__input-btn" onclick="increaseQuantity(1)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item__content-right">
                                            <p class="cart-item__total-price">$47.00</p>
                                            <div class="cart-item__ctrl">
                                                <button class="cart-item__ctrl-btn">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/heart-2.svg" alt="" />
                                                    Save
                                                </button>
                                                <button class="cart-item__ctrl-btn js-toggle"
                                                    toggle-target="#delete-confirm">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/trash.svg" alt="" />
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <!-- Cart item 2 -->
                                <article class="cart-item">
                                    <label class="cart-info__checkbox">
                                        <input name="check-item" type="checkbox" name="shipping-adress" class="cart-info__checkbox-input" />
                                    </label>
                                    <a href="/BTL_LTW/LTWeb/detail?id=1">
                                        <img src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png" alt="" class="cart-item__thumb" />
                                    </a>
                                    <div class="cart-item__content">
                                        <div class="cart-item__content-left">
                                            <h3 class="cart-item__title">
                                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                                    Lavazza Coffee Blends - Try the Italian Espresso
                                                </a>
                                            </h3>
                                            <p class="cart-item__price-wrap">
                                                $53.00 | <span class="cart-item__status">In Stock</span>
                                            </p>
                                            <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                <!-- <div class="cart-item__input">
                                                    LavAzza
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down-2.svg" alt="" />
                                                </div> -->
                                                <div class="cart-item__input">
                                                    <button class="cart-item__input-btn" onclick="descreaseQuantity(2)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="" />
                                                    </button>
                                                    <!-- <span id="quantity2">1</span> -->
                                                    <!-- <span style="width: 20px; text-align: center;" id="quantity2">1</span> -->
                                                    <input type="number" onchange="handleQuantityInput(2)" class="quantity-input" id="quantity2" value="1" min="1"/>
                                                    <button class="cart-item__input-btn" onclick="increaseQuantity(2)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item__content-right">
                                            <p class="cart-item__total-price">$106.00</p>
                                            <div class="cart-item__ctrl">
                                                <button class="cart-item__ctrl-btn">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/heart-2.svg" alt="" />
                                                    Save
                                                </button>
                                                <button class="cart-item__ctrl-btn js-toggle"
                                                    toggle-target="#delete-confirm">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/trash.svg" alt="" />
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <!-- Cart item 3 -->
                                <article class="cart-item">
                                    <label class="cart-info__checkbox">
                                        <input name="check-item" type="checkbox" name="shipping-adress" class="cart-info__checkbox-input" />
                                    </label>
                                    <a href="/BTL_LTW/LTWeb/detail?id=1">
                                        <img src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png" alt="" class="cart-item__thumb" />
                                    </a>
                                    <div class="cart-item__content">
                                        <div class="cart-item__content-left">
                                            <h3 class="cart-item__title">
                                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                                    Qualità Oro Mountain Grown - Espresso Coffee Beans
                                                </a>
                                            </h3>
                                            <p class="cart-item__price-wrap">
                                                $38.65 | <span class="cart-item__status">In Stock</span>
                                            </p>
                                            <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                <!-- <div class="cart-item__input">
                                                    LavAzza
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down-2.svg" alt="" />
                                                </div> -->
                                                <div class="cart-item__input">
                                                    <button class="cart-item__input-btn" onclick="descreaseQuantity(3)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="" />
                                                    </button>
                                                    <!-- <span id="quantity3">1</span> -->
                                                    <!-- <span style="width: 20px; text-align: center;" id="quantity3">1</span> -->
                                                    <input type="number" onchange="handleQuantityInput(3)" class="quantity-input" id="quantity3" value="1" min="1"/>
                                                    <button class="cart-item__input-btn" onclick="increaseQuantity(3)">
                                                        <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-item__content-right">
                                            <p class="cart-item__total-price">$38.65</p>
                                            <div class="cart-item__ctrl">
                                                <button class="cart-item__ctrl-btn">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/heart-2.svg" alt="" />
                                                    Save
                                                </button>
                                                <button class="cart-item__ctrl-btn js-toggle"
                                                    toggle-target="#delete-confirm">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/trash.svg" alt="" />
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="cart-info__bottom d-md-none">
                                <!-- <button class="selected-delete btn btn--danger btn--rounded js-toggle"
                                    style="float: right; margin-bottom: 20px;"
                                    toggle-target="#delete-selected-confirm"
                                    disabled>
                                    Delete (0)
                                </button> -->
                                <div style="clear: right;"></div>
                                <div class="row">
                                    <div class="col-8 col-xxl-7">
                                        <div class="cart-info__continue">
                                            <a href="/BTL_LTW/LTWeb/" class="cart-info__continue-link">
                                                <img class="cart-info__continue-icon icon"
                                                    src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down-2.svg" alt="" />
                                                Continue Shopping
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-4 col-xxl-5">
                                        <div class="cart-info__row">
                                            <span>Subtotal:</span>
                                            <span class='subtotalAmount'>$0</span>
                                        </div>
                                        <div class="cart-info__row">
                                            <span>Shipping:</span>
                                            <span>$10.00</span>
                                        </div>
                                        <div class="cart-info__separate"></div>
                                        <div class="cart-info__row cart-info__row--bold">
                                            <span>Total:</span>
                                            <span class='totalAmount'>$10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-xl-12">
                        <div class="cart-info">
                            <div class="cart-info__row">
                                <span>Subtotal <span class="cart-info__sub-label">(items)</span></span>
                                <span id='numOfItem'>0</span>
                            </div>
                            <div class="cart-info__row">
                                <span>Price <span class="cart-info__sub-label">(Total)</span></span>
                                <span class='subtotalAmount'>$0.00</span>
                            </div>
                            <div class="cart-info__row">
                                <span>Shipping</span>
                                <span>$10.00</span>
                            </div>
                            <div class="cart-info__separate"></div>
                            <div class="cart-info__row">
                                <span>Estimated Total</span>
                                <span class='totalAmount'>$10</span>
                            </div>
                            <a href="/BTL_LTW/LTWeb/payment" id='checkout-link' class="cart-info__next-btn btn btn--primary btn--rounded">
                                Continue to checkout
                            </a>
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

    <div id="delete-selected-confirm" class="modal modal--small hide">
        <div class="modal__content">
            <p class="selected-modal__text">Do you want to remove selected items from favourite list?</p>
            <div class="modal__bottom">
                <button class="btn btn--small btn--outline modal__btn js-toggle" toggle-target="#delete-selected-confirm">
                    Cancel
                </button>
                <button class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin js-toggle"
                    toggle-target="#delete-selected-confirm">
                    Delete
                </button>
            </div>
        </div>
        <div class="modal__overlay js-toggle" toggle-target="#delete-selected-confirm"></div>
    </div>

    <!-- Modal: address new shipping address -->
    <div id="add-new-address" class="modal hide" style="--content-width: 650px">
        <div class="modal__content">
            <form method="post" class="form" id="shippingForm" enctype="multipart/form-data">
                <h2 class="modal__heading">Add new shipping address</h2>
                <input type="hidden" name="addressToEdit"> <!-- input không nhập, ẩn, sử dụng trong trường hợp edit address -->
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
                                    required minlength="10" maxlength="10" />
                                <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Phone must be 10 characters</p>
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
                            <input type="text" name="city" placeholder="City/District/Town" id="city" readonly
                                class="form__input js-toggle" toggle-target="#city-dialog" />
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />

                            <!-- Select dialog -->
                            <div id="city-dialog" name='city' class="form__select-dialog hide">
                                <h2 class="form__dialog-heading d-none d-sm-block">City/District/Town</h2>
                                <!--<button class="form__close-dialog d-none d-sm-block js-toggle"
                                    toggle-target="#city-dialog">
                                    &times
                                </button>
                                 <div class="form__search">
                                   <input type="text" placeholder="Search" class="form__search-input"/>  
                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/search.svg" alt="" class="form__search-icon icon" />
                                </div>-->
                                <ul class="form__options-list" id = "city-dialog-list">
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
                        <p class="form__error">Address must not empty</p>
                    </div>
                    <div class="form__group form__group--inline">
                        <label class="form__checkbox">
                            <input type="checkbox" name="isDefault" id="" class="form__checkbox-input d-none" />
                            <span class="form__checkbox-label">Set as default address</span>
                        </label>
                    </div>
                </div>
                <div class="modal__bottom">
                    <button type='button' id='cancelAddEdit' class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn--small btn--primary modal__btn btn--no-margin js-toggle"
                        toggle-target="#avoid-faults" id="createButton">
                        Create
                    </button>
                    <span id = "avoid-faults"></span>
                </div>
            </form>
        </div>
        <div class="modal__overlay"></div>
    </div>

    <script>
        var checkItems = document.getElementsByName("check-item");
        for (var i = 0; i < checkItems.length; i++) {
            checkItems[i].addEventListener('change', handleCheck);
        }
        var listAddress = <?php echo json_encode($listAddress); ?>;
    </script>
    <script src="/BTL_LTW/LTWeb/public/assets/js/shipping.js"></script>
</body>
</html>