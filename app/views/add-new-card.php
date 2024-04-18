<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add new card | Grocery Mart</title>

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="/BTL_LTW/LTWeb/public/assets/favicon/apple-touch-icon.png" />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-32x32.png" />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-16x16.png" />
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
                        <input
                            type="text"
                            name=""
                            id=""
                            placeholder="Search for item"
                            class="search-bar__input" />
                        <button class="search-bar__submit">
                            <img
                                src="/BTL_LTW/LTWeb/public/assets/icons/search.svg"
                                alt=""
                                class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Profile content -->
                <div class="profile-container">
                    <div class="row gy-md-3">
                        <div class="col-3 col-xl-4 d-lg-none">
                            <aside class="profile__sidebar">
                                <!-- User -->
                                <div class="profile-user">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-3.png"
                                        alt=""
                                        class="profile-user__avatar" />
                                    <h1 class="profile-user__name">
                                        Imran Khan
                                    </h1>
                                    <p class="profile-user__desc">
                                        Registered: 17th May 2022
                                    </p>
                                </div>

                                <!-- Menu 1 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">
                                        Manage Account
                                    </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a
                                                href="/BTL_LTW/LTWeb/profile/edit_personal_info"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/profile.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Personal info
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/location.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Addresses
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/message-2.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Communications & privacy
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 2 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">
                                        My items
                                    </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/download.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Reorder
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Lists
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/gift-2.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Registries
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 3 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">
                                        Subscriptions & plans
                                    </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/shield.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Protection plans
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu 4 -->
                                <div class="profile-menu">
                                    <h3 class="profile-menu__title">
                                        Customer Service
                                    </h3>
                                    <ul class="profile-menu__list">
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/info.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Help
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#!"
                                                class="profile-menu__link">
                                                <span
                                                    class="profile-menu__icon">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/danger.svg"
                                                        alt=""
                                                        class="icon" />
                                                </span>
                                                Terms of Use
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-9 col-xl-8 col-lg-12">
                            <div class="cart-info">
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <h2 class="cart-info__heading">
                                            <a href="/BTL_LTW/LTWeb/profile">
                                                <img src="/BTL_LTW/LTWeb/public/assets/icons/arrow-left.svg" alt="" class="icon cart-info__back-arrow" />
                                            </a>
                                            Add credit or debit card
                                        </h2>
                                        <form action="/BTL_LTW/LTWeb/profile" class="form form-card">
                                            <!-- Form row 1 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="last-name" class="form__label form-card__label">
                                                        Full Name
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input type="text" id="last-name" placeholder="Full name" class="form__input" required />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">
                                                        Please enter your full name
                                                    </p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="card-cvv" class="form__label form-card__label">
                                                        CVV
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input type="text" id="card-cvv" placeholder="CVV" class="form__input" required />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error" id="cvc-error">
                                                        Please enter a valid CVV
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Form row 2 -->
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="card-number" class="form__label form-card__label">
                                                        Card Number
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input type="text" id="card-number" placeholder="Card Number" class="form__input" required />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">
                                                        Please enter a valid card number
                                                    </p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="expiration-date" class="form__label form-card__label">
                                                        Expiration Date
                                                    </label>
                                                    <div class="form__text-input">
                                                        <input type="text" id="expiration-date" class="form__input" placeholder="mm/yy" />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error" id="expiry-error">
                                                        Please enter a valid expiration date
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Form row 3 -->
                                            <div class="form__row"></div>
                                            <div class="form__group">
                                                <label for="set-default-card" class="form__label form-card__label">
                                                    Card Preferences
                                                </label>
                                                <label class="form__checkbox">
                                                    <input type="checkbox" id="set-default-card" checked class="form__checkbox-input d-none" />
                                                    <span class="form__checkbox-label">Set as default card</span>
                                                </label>
                                            </div>
                                            <div class="form-card__bottom">
                                                <a class="btn btn--text" href="/BTL_LTW/LTWeb/profile">Cancel</a>
                                                <button class="btn btn--primary btn--rounded cart-info__next-btn" style ="margin: 0px;"type="submit">
                                                    Save card
                                                </button>
                                            </div>
                                        </form>
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
                <p class="modal__text">
                    Do you want to remove this item from shopping cart?
                </p>
                <div class="modal__bottom">
                    <button
                        class="btn btn--small btn--outline modal__btn js-toggle"
                        toggle-target="#delete-confirm">
                        Cancel
                    </button>
                    <button
                        class="btn btn--small btn--danger btn--primary modal__btn btn--no-margin js-toggle"
                        toggle-target="#delete-confirm">
                        Delete
                    </button>
                </div>
            </div>
            <div
                class="modal__overlay js-toggle"
                toggle-target="#delete-confirm"></div>
        </div>
        <script src="/BTL_LTW/LTWeb/public/assets/js/add-new-cart.js"></script>
    </body>
</html>
