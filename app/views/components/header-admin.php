<?php
	require_once __DIR__ . '/../../models/User.php';
	session_start();
?>

<div class="container">
    <div class="top-bar">
        <!-- More -->
        <button
            class="top-bar__more d-none d-lg-block js-toggle"
            toggle-target="#navbar">
            <img
                src="/BTL_LTW/LTWeb/public/assets/icons/more.svg"
                alt=""
                class="icon top-bar__more-icon" />
        </button>
        <!-- Logo -->
        <a href="/BTL_LTW/LTWeb" class="logo top-bar__logo">
            <img
                src="/BTL_LTW/LTWeb/public/assets/icons/logo.svg"
                alt="grocery"
                class="logo__img top-bar__logo-img" />
            <h1 class="logo__title top-bar__logo-title">Grocery</h1>
        </a>

        <!-- Navbar -->
        <nav id="navbar" class="navbar hide">
          <ul class="navbar__list js-dropdown-list">
              <li class="navbar__item">
                  <a href="/BTL_LTW/LTWeb/admin" class="navbar__link">
                      Products
                  </a>
              </li>
              <li class="navbar__item">
                  <a href="/BTL_LTW/LTWeb/admin/bills" class="navbar__link">
                      Bills
                  </a>
              </li>
              <li class="navbar__item">
                  <a href="/BTL_LTW/LTWeb/admin/users" class="navbar__link">Users
                  </a>
              </li>
          </ul>
        </nav>

        <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

        <!-- Actions -->
        <div class="top-act">
            <!-- <div class="top-act__group d-md-none top-act__group--single">
                <button class="top-act__btn">
                    <img src="/BTL_LTW/LTWeb/public/assets/icons/search.svg" alt="" class="icon top-act__icon" />
                </button>
            </div> -->
            <div class="top-act__group d-md-none">
                <div class="top-act__btn-wrap">
                    <button class="top-act__btn">
                        <img
                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                            alt=""
                            class="icon top-act__icon" />
                        <span name="favQuantity" class="top-act__title"></span>
                    </button>

                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img
                                src="/BTL_LTW/LTWeb/public/assets/icons/arrow-up.png"
                                alt=""
                                class="act-dropdown__arrow" />
                            <div class="act-dropdown__top">
                                <h2 id="favQuantityInfo" class="act-dropdown__title">
                                    <!-- You have 3 item(s) -->
                                </h2>
                                <a
                                    href="/BTL_LTW/LTWeb/favourite"
                                    class="act-dropdown__view-all"
                                    >See All</a
                                >
                            </div>
                            <div id="favProducts" class="row row-cols-3 gx-2 act-dropdown__list"></div>
                    	</div>
					</div>
                </div>
                <div class="top-act__separate"></div>
                <div class="top-act__btn-wrap">
                    <button class="top-act__btn">
                        <img
                            src="/BTL_LTW/LTWeb/public/assets/icons/buy.svg"
                            alt=""
                            class="icon top-act__icon" />
                        <span name="cartTotalPrice" class="top-act__title"></span>
                    </button>
                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img
                                src="/BTL_LTW/LTWeb/public/assets/icons/arrow-up.png"
                                alt=""
                                class="act-dropdown__arrow" />
                            <div class="act-dropdown__top">
                                <h2 id="cartQuantityInfo" class="act-dropdown__title">
                                    <!-- You have 3 item(s) -->
                                </h2>
                                <a
                                    href="/BTL_LTW/LTWeb/checkout"
                                    class="act-dropdown__view-all"
                                    >See All</a
                                >
                            </div>
                            <div id="cartProducts" class="row row-cols-3 gx-2 act-dropdown__list"></div>
                            <div class="act-dropdown__bottom">
                                <div
                                    class="act-dropdown__row act-dropdown__row--bold">
                                    <span class="act-dropdown__label"
                                        >Total Price</span
                                    >
                                    <span name="cartTotalPrice" class="act-dropdown__value"
                                        >$</span
                                    >
                                </div>
                            </div>
                            <div class="act-dropdown__checkout">
                                <a
                                    href="/BTL_LTW/LTWeb/checkout"
                                    class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
                                    Check Out All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-act__user">
                <img
                    src="/BTL_LTW/LTWeb/public/assets/img/avatar.jpg"
                    alt=""
                    class="top-act__avatar" />

                <!-- Dropdown -->
                <div class="act-dropdown top-act__dropdown">
                    <div class="act-dropdown__inner user-menu">
                        <img
                            src="/BTL_LTW/LTWeb/public/assets/icons/arrow-up.png"
                            alt=""
                            class="act-dropdown__arrow top-act__dropdown-arrow" />

                        <div class="user-menu__top">
                            <img
                                src="/BTL_LTW/LTWeb/public/assets/img/avatar.jpg"
                                alt=""
                                class="user-menu__avatar" />
                            <div>
                                <p id="username" class="user-menu__name"><?php echo $_SESSION['user']->fullname ?></p>
                                <p id="email"><?php
                                  if (strpos($_SESSION['user']->email, "@") > 15) {
                                    echo substr($_SESSION['user']->email, 0, strpos($_SESSION['user']->email, "@")) . "<br>"
                                    . substr($_SESSION['user']->email, strpos($_SESSION['user']->email, "@"));
                                  }
                                  else {
                                    echo $_SESSION['user']->email;
                                  }
                                ?></p>
                            </div>
                        </div>

                        <ul class="user-menu__list">
                            <li>
                                <a href="/BTL_LTW/LTWeb/profile" class="user-menu__link"
                                    >Profile</a
                                >
                            </li>
                            <li>
                                <a
                                    href="/BTL_LTW/LTWeb/favourite"
                                    class="user-menu__link"
                                    >Favourite list</a
                                >
                            </li>
                            <li class="user-menu__separate">
                                <a
                                    href="#!"
                                    class="user-menu__link"
                                    id="switch-theme-btn">
                                    <span>Dark mode</span>
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/icons/sun.svg"
                                        alt=""
                                        class="icon user-menu__icon" />
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="user-menu__link"
                                    >Settings</a
                                >
                            </li>
                            <li class="user-menu__separate">
                                <form method='post' action='/BTL_LTW/LTWeb/logout'>
                                  <button type='submit' class="user-menu__link">
                                    Logout
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>