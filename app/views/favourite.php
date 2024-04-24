<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Favourite List | Grocery Mart</title>

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
                        <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Favorite</a>
                    </li>
                </ul>
            </div>

            <!-- Checkout content -->
            <div class="checkout-container">
                <div class="row gy-xl-3">
                    <div class="col-12">
                        <div class="cart-info">
                            <h1 class="cart-info__heading">Favourite List</h1>
                            <p class="cart-info__desc"><?= count($products) ?> items</p>
                            <div class="cart-info__check-all">
                                <label class="cart-info__checkbox">
                                    <input onChange="checkAll()" id="check-all" type="checkbox" name="shipping-adress" class="cart-info__checkbox-input" />
                                </label>
                            </div>
                            <div class="cart-info__list">
                                <?php foreach ($products as $product): ?>
                                    <article class="cart-item">
                                        <label class="cart-info__checkbox">
                                            <input type="checkbox" class="cart-info__checkbox-input" name="check-item[]" value="<?= htmlspecialchars($product->PID) ?>" />
                                        </label>
                                        <a href="/BTL_LTW/LTWeb/detail?id=<?= htmlspecialchars($product->PID) ?>">
                                            <img src="<?= htmlspecialchars($product->img) ?>" alt="Image of <?= htmlspecialchars($product->name) ?>" class="cart-item__thumb" />
                                        </a>
                                        <div class="cart-item__content">
                                            <div class="cart-item__content-left">
                                                <h3 class="cart-item__title">
                                                    <a href="/BTL_LTW/LTWeb/detail?id=<?= htmlspecialchars($product->PID) ?>">
                                                        <?= htmlspecialchars($product->name) ?>
                                                    </a>
                                                </h3>
                                                <p class="cart-item__price-wrap">
                                                    $<?= htmlspecialchars($product->price) ?> | <span class="cart-item__status">In Stock</span> <!-- Consider dynamic stock status -->
                                                </p>
                                                <div class="cart-item__ctrl-wrap">
                                                    <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                        <div class="cart-item__input">
                                                            <button class="cart-item__input-btn" onclick="descreaseQuantity(<?= htmlspecialchars($product->PID) ?>)">
                                                                <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="Decrease quantity" />
                                                            </button>
                                                            <input type="number" onchange="handleQuantityInput(<?= htmlspecialchars($product->PID) ?>)" class="quantity-input" id="quantity<?= htmlspecialchars($product->PID) ?>" value="1" min="1" />
                                                            <button class="cart-item__input-btn" onclick="increaseQuantity(<?= htmlspecialchars($product->PID) ?>)">
                                                                <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="Increase quantity" />
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="cart-item__ctrl">
                                                        <button class="cart-item__ctrl-btn">
                                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/heart-2.svg" alt="" />
                                                            Save
                                                        </button>
                                                        <button class="cart-item__ctrl-btn js-toggle" toggle-target="#delete-confirm-<?= htmlspecialchars($product->PID) ?>">
                                                            <img src="/BTL_LTW/LTWeb/public/assets/icons/trash.svg" alt="Delete" />
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item__content-right">
                                                <p class="cart-item__total-price">$<?= htmlspecialchars($product->price) ?></p>
                                                <button class="cart-item__checkout-btn btn btn--primary btn--rounded">
                                                    Check Out
                                                </button>
                                            </div>
                                        </div>
                                    </article>

                                <?php endforeach; ?>
                            </div>
                            <div class="cart-info__bottom">
                                <div class="cart-info__row cart-info__row-md--block">
                                    <div class="cart-info__continue">
                                        <a href="/BTL_LTW/LTWeb/" class="cart-info__continue-link">
                                            <img class="cart-info__continue-icon icon"
                                                src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down-2.svg" alt="" />
                                            Continue Shopping
                                        </a>
                                    </div>
                                    <div class="delete-checkout-button-container">
                                        <button class="selected-delete btn btn--danger btn--rounded js-toggle"
                                            toggle-target="#delete-selected-confirm"
                                            disabled>
                                            Delete (0)
                                        </button>
                                        <button class="selected-checkout cart-info__checkout-all btn btn--primary btn--rounded"
                                            disabled>
                                            Check out (0)
                                        </button>
                                    </div>
                                </div>
                            </div>
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
            <p class="modal__text">Do you want to remove this item from favourite list?</p>
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
    <script>
        var checkItems = document.getElementsByName("check-item");
        for (var i = 0; i < checkItems.length; i++) {
            checkItems[i].addEventListener('change', handleCheck);
        }
        
        document.querySelector('.cart-info__checkout-all').addEventListener('click', function() {
            window.location.href = '/BTL_LTW/LTWeb/checkout';
        });
    </script>
</body>

</html>