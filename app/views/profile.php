<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | Grocery Mart</title>

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
    <main class="profile">
        <div class="container">
            <!-- Search bar -->
            <div class="profile-container">
                <div class="search-bar d-none d-md-flex">
                    <input type="text" name="" id="" placeholder="Search for item" class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="/BTL_LTW/LTWeb/public/assets/icons/search.svg" alt="" class="search-bar__icon icon" />
                    </button>
                </div>
            </div>

            <!-- Profile content -->
            <div class="profile-container">
                <div class="row gy-md-3">
                    <div class="col-3 col-xl-4 col-lg-5 col-md-12">
                        <aside class="profile__sidebar">
                            <!-- User -->
                            <div class="profile-user">
                                <img src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-3.png" alt="" class="profile-user__avatar" />
                                <h1 class="profile-user__name"><?= htmlspecialchars($user->fullname) ?></h1>
                                <p class="profile-user__desc">Registered: 17th May 2022</p>
                            </div>

                            <!-- Menu 1 -->
                            <div class="profile-menu">
                                <h3 class="profile-menu__title">Manage Account</h3>
                                <ul class="profile-menu__list">
                                    <li>
                                        <a href="/BTL_LTW/LTWeb/profile/edit_personal_info" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/profile.svg" alt="" class="icon" />
                                            </span>
                                            Personal info
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/location.svg" alt="" class="icon" />
                                            </span>
                                            Addresses
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/message-2.svg" alt="" class="icon" />
                                            </span>
                                            Communications & privacy
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Menu 2 -->
                            <div class="profile-menu">
                                <h3 class="profile-menu__title">My items</h3>
                                <ul class="profile-menu__list">
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/download.svg" alt="" class="icon" />
                                            </span>
                                            Reorder
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg" alt="" class="icon" />
                                            </span>
                                            Lists
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/gift-2.svg" alt="" class="icon" />
                                            </span>
                                            Registries
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Menu 3 -->
                            <div class="profile-menu">
                                <h3 class="profile-menu__title">Subscriptions & plans</h3>
                                <ul class="profile-menu__list">
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/shield.svg" alt="" class="icon" />
                                            </span>
                                            Protection plans
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Menu 4 -->
                            <div class="profile-menu">
                                <h3 class="profile-menu__title">Customer Service</h3>
                                <ul class="profile-menu__list">
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/info.svg" alt="" class="icon" />
                                            </span>
                                            Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="profile-menu__link">
                                            <span class="profile-menu__icon">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/danger.svg" alt="" class="icon" />
                                            </span>
                                            Terms of Use
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-9 col-xl-8 col-lg-7 col-md-12">
                        <div class="cart-info">
                            <div class="row gy-3">
                                <!-- My wallet -->
                                <div class="col-12">
                                    <h2 class="cart-info__heading">My Wallet</h2>
                                    <p class="cart-info__desc profile__desc">Payment methods</p>

                                    <div class="row row-cols-3 row-cols-xl-2 row-cols-lg-1 gy-md-2">
                                        <?php foreach ($creditCards as $card): ?>
                                        <div class="col">
                                            <article class="payment-card" style="--bg-color: #1e2e69;">
                                            <img src="/BTL_LTW/LTWeb/public/assets/img/card/plane-bg.svg" alt=""
                                                    class="payment-card__img" />
                                            <div class="payment-card__top">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/img/card/plane.svg" alt="" />
                                                    <span class="payment-card__type">CreditCard</span>
                                            </div>
                                            <div class="payment-card__number"><?= htmlspecialchars($card->cardNumber) ?></div>
                                            <div class="payment-card__bottom">
                                                <div>
                                                    <p class="payment-card__label">Card Holder</p>
                                                    <p class="payment-card__value"><?= htmlspecialchars($card->fullname) ?></p>
                                                </div>
                                                <div class="payment-card__expired">
                                                    <p class="payment-card__label">Expires</p>
                                                    <p class="payment-card__value"><?= htmlspecialchars(date("m/y", strtotime($card->expDate))) ?></p>
                                                </div>
                                                <div class="payment-card__circle"></div>
                                            </div>
                                            </article>
                                        </div>
                                        <?php endforeach; ?>

                                        <!-- Add new payment card -->
                                        <div class="col">
                                            <a class="new-card" href="/BTL_LTW/LTWeb/profile/add_new_card">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" class="new-card__icon icon" />
                                                <p class="new-card__text">Add New Card</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Account info -->
                                <div class="col-12">
                                    <h2 class="cart-info__heading">Account info</h2>
                                    <p class="cart-info__desc profile__desc">
                                        Addresses, contact information and password
                                    </p>
                                    <div class="row gy-md-2 row-cols-2 row-cols-lg-1">
                                        <!-- Account info 1 -->
                                        <div class="col">
                                            <article class="account-info">
                                                <div class="account-info__icon">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/message.svg" alt="" class="icon" />
                                                </div>
                                                <div>
                                                    <h3 class="account-info__title">Email Address</h3>
                                                    <p class="account-info__desc"><?= htmlspecialchars($user->email) ?></p>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Account info 2 -->
                                        <div class="col">
                                            <article class="account-info">
                                                <div class="account-info__icon">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/calling.svg" alt="" class="icon" />
                                                </div>
                                                <div>
                                                    <h3 class="account-info__title">Phone number</h3>
                                                    <p class="account-info__desc"><?= htmlspecialchars($user->phone) ?></p>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Account info 3 -->
                                        <!--
                                        <div class="col">
                                            <article class="account-info">
                                                <div class="account-info__icon">
                                                    <img src="/BTL_LTW/LTWeb/public/assets/icons/location.svg" alt="" class="icon" />
                                                </div>
                                                
                                                <div>
                                                    <h3 class="account-info__title">Add an address</h3>
                                                    <p class="account-info__desc">
                                                        Bangladesh Embassy, Washington, DC 20008
                                                    </p>
                                                </div>
                                            </article>
                                        </div>
                                        -->
                                        <div class="col">
                                                <article class="account-info">
                                                    <div class="account-info__icon">
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/location.svg" alt="" class="icon" />
                                                    </div>
                                                    <div>
                                                        <h3 class="account-info__title">Shipping Address</h3>
                                                    <?php foreach ($addresses as $address): ?>
                                                        <p class="account-info__desc">
                                                            <?= htmlspecialchars($address->additionalAddressInfo); ?>,
                                                            <?= htmlspecialchars($address->cityDistrictTown); ?>
                                                        </p>
                                                    <?php endforeach; ?>
                                                    </div>
                                                </article>
                                                
                                        </div>
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
</body>

</html>