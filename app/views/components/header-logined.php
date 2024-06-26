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
            <button class="navbar__close-btn js-toggle" toggle-target="#navbar">
                <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/arrow-left.svg" alt="" />
            </button>
            <a href="/BTL_LTW/LTWeb/shipping" class="nav-btn d-none d-md-flex">
                <img
                    src="/BTL_LTW/LTWeb/public/assets/icons/buy.svg"
                    alt=""
                    class="nav-btn__icon icon" />
                <span class="nav-btn__title">Cart</span>
                <span name="cartQuantity" class="nav-btn__qnt"></span>
            </a>
            <a href="/BTL_LTW/LTWeb/favourite" class="nav-btn d-none d-md-flex">
                <img
                    src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                    alt=""
                    class="nav-btn__icon icon" />
                <span class="nav-btn__title">Favorite</span>
                <span name="favQuantity" class="nav-btn__qnt"></span>
            </a>
            <ul class="navbar__list js-dropdown-list">
                <li class="navbar__item">
                  <a class="navbar__link" href="#!">
                    Departments
                    <img
                      alt=""
                      class="navbar__arrow icon"
                      src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down.svg"
                    />
                  </a>
                  <div class="dropdown js-dropdown">
                    <div class="dropdown__inner">
                      <div class="top-menu">
                        <div class="top-menu__main">
                          <!-- Menu column -->
                          <div class="menu-column">
                            <div class="menu-column__icon d-lg-none">
                              <img
                                alt=""
                                class="menu-column__icon-1"
                                src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                              />
                              <img
                                alt=""
                                class="menu-column__icon-2"
                                src="https://img.icons8.com/ios-filled/50/shop.png"
                              />
                            </div>
                            <div class="menu-column__content">
                              <h2 class="menu-column__heading d-lg-none">
                                All Departments
                              </h2>
                              <ul class="menu-column__list js-menu-list">
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">
                                    Savings &amp; Featured Shops
                                  </a>
                                  <!-- Sub menu for "Savings & Featured Shops" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/fashion-model.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Fashion Deals</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Clothing
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bags
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Jewelry
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/electronics.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Electronics Discounts</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Smartphones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laptops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Headphones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cameras
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tablets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Speakers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wearable Tech
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/person-at-home.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Home &amp; Living Specials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Furniture
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kitchenware
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bedding
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Appliances
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Lighting
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Furniture
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Home Office
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bathroom
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Storage
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cleaning Supplies
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/cute-clipart/64/ulta-beauty.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Beauty Bargains</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Skincare
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Makeup
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Haircare
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fragrances
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Nail Care
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Beauty Tools
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Men's Grooming
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/sports.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Sports &amp; Outdoors Deals</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fitness Equipment
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sportswear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Camping
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Biking
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">Electronics</a>
                                  <!-- Sub menu for "Electronics" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flat-icons-vectorslab/68/external-Tv-Video-user-interface-flat-icons-vectorslab.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">TV &amp; Video</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop all TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TVs by Size
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Smart TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Roku TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Streaming
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TV Mounts &amp; Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                DVD &amp; Blu-Ray Players
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/apple-watch.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Wearable Technology</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Galaxy Watch
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Apple Watch
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fitness Trackers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Virtual Reality
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Headphones
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/external-computers-support-vitaliy-gorbachev-fill-vitaly-gorbachev.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Computers</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop All Computers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laptops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Gaming
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Monitors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Chromebook
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Printers &amp; Ink
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop all TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Computer Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Desktops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tax Software
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Computer Software
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Finder
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/money-box--v1.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Savings</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tech Savings
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Overstock Savings
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tech Rollbacks
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/multiple-smartphones.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Cell Phones</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wireless Deals
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                5G Phones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Prepaid Phones &amp; Plans
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Refurbished Phones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                iPhone Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cases &amp; Screen Protectors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Walmart Protection Plan
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Unlocked Phones
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">
                                    Clothing, Shoes &amp; Accessories
                                  </a>
                                  <!-- Sub menu for "Clothing, Shoes & Accessories" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/s-cute.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Men's Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Casual Shirts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Formal Suits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Jeans &amp; Pants
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outerwear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                T-Shirts
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/s-cute.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Women's Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dresses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Skirts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Blouses &amp; Tops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Handbags
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Coats &amp; Jackets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/flip-flops.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Footwear</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Men's Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Women's Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kids' Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sneakers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Boots
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sandals
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/fashion-model.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Fashion Accessories</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Belts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Hats &amp; Caps
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Scarves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gloves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sunglasses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Watches
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/natural-food.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Seasonal Specials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Winter Wear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Summer Outfits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Rain Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Holiday Collection
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gift Sets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">
                                    Home, Furniture &amp; Appliances
                                  </a>
                                  <!-- Sub menu for "Home, Furniture & Appliancess" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/living-room.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Living Room</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sofa Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Coffee Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TV Units
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Book Shelves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Decor
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/mixer.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Kitchen Appliances</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Microwave Ovens
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dishwashers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gas Stoves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Refrigerators
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Blenders
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Sub-Menu Column 3: Bedroom -->
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/bedroom.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Bedroom</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Beds
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wardrobes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dressing Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Nightstands
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Mattresses
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Sub-Menu Column 4: Home Decor -->
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-home-decor-pharmaceutical-flaticons-lineal-color-flat-icons.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Home Decor</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Art
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vases
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Light Fixtures
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Curtains
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Carpets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/sofa.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Office Furniture</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Office Chairs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Desks
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cabinets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Meeting Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bookcases
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Toys &amp; Video Games</a
                                  >
                                  <!-- Sub menu for "Toys & Video Games" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/action.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Action Figures</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Superheroes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Anime Figures
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Movie Characters
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Collectibles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Robots
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-video-games-quarantine-flaticons-lineal-color-flat-icons-2.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Video Games</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Console Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Mobile Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Virtual Reality
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Game Accessories
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Sub-Menu Column 3: Educational Toys -->
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-others-pike-picture/50/external-Educational-Toys-toy-others-pike-picture-3.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Educational Toys</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                STEM Kits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Puzzles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Books
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Art Supplies
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Learning Tablets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/outdoor-toilet.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Outdoor Toys</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Ride-Ons
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Scooters
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bicycles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sports Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Swimming Pools
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Sub-Menu Column 5: Dolls & Plush -->
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/nesting-dolls.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Dolls &amp; Plush</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fashion Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Animal Plush
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Character Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Interactive Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Collectibles
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Home Improvement</a
                                  >
                                  <!-- Sub menu for "Home Improvement" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/buy-upgrade--v1.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Bathroom Upgrades</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shower Heads
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vanity Units
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bath Tubs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tile Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bathroom Lighting
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cabinet Designs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Countertops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kitchen Islands
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Backsplash Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Appliance Upgrades
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/carpet-man.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Flooring Solutions</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Hardwood Flooring
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tile Flooring
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laminate Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Carpet Choices
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vinyl Flooring
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/improvement.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Outdoor Improvements</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Deck Designs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Patio Ideas
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Landscaping
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Garden Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Lighting
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-others-pike-picture/50/external-Painting-wallpaper-others-pike-picture.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Paint &amp; Wallpaper</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Paints
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Primers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wallpapers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Stencils
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Paint Brushes
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/plant-lighting.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Lighting &amp; Fixtures</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Ceiling Lights
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Lamps
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Lights
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Chandeliers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Table Lamps
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">Baby</a>
                                  <!-- Sub menu for "Baby" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-victoruler-flat-victoruler/64/external-baby-clothing-baby-victoruler-flat-victoruler.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Baby Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Newborn Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Baby Dresses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Rompers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Accessories
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/feeding-baby.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Feeding Essentials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bottles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                High Chairs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sterilizers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bibs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sippy Cups
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/ring.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Diapering</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Diapers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wipes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Changing Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Pails &amp; Refills
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Creams &amp; Ointments
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/baby-symbol-emoji.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Nursery</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cribs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bedding Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Monitors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Storage
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/books.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Toys &amp; Books</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Educational Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Soft Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Activity Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Books
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Puzzles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Thermometers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Baby Gates
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Humidifiers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                First Aid
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vitamins &amp; Supplements
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Household Essentials</a
                                  >
                                  <!-- Sub menu for "Household Essentials" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/fashion-model.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Fashion Deals</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Clothing
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bags
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Jewelry
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/electronics.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Electronics Discounts</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Smartphones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laptops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Headphones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cameras
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tablets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Speakers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wearable Tech
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/person-at-home.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Home &amp; Living Specials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Furniture
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kitchenware
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bedding
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Appliances
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Lighting
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Furniture
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Home Office
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bathroom
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Storage
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cleaning Supplies
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/cute-clipart/64/ulta-beauty.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Beauty Bargains</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Skincare
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Makeup
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Haircare
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fragrances
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Nail Care
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Beauty Tools
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Men's Grooming
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/sports.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Sports &amp; Outdoors Deals</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fitness Equipment
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sportswear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Camping
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Biking
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Personal Care</a
                                  >
                                  <!-- Sub menu for "Personal Care" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flat-icons-vectorslab/68/external-Tv-Video-user-interface-flat-icons-vectorslab.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">TV &amp; Video</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop all TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TVs by Size
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Smart TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Roku TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Streaming
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TV Mounts &amp; Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                DVD &amp; Blu-Ray Players
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/apple-watch.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Wearable Technology</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Galaxy Watch
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Apple Watch
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fitness Trackers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Virtual Reality
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Headphones
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/external-computers-support-vitaliy-gorbachev-fill-vitaly-gorbachev.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Computers</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop All Computers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laptops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Gaming
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Monitors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Chromebook
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Printers &amp; Ink
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shop all TVs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Computer Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Desktops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tax Software
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Computer Software
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Finder
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/money-box--v1.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Savings</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tech Savings
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Overstock Savings
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tech Rollbacks
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/multiple-smartphones.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Cell Phones</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wireless Deals
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                5G Phones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Prepaid Phones &amp; Plans
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Refurbished Phones
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                iPhone Accessories
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cases &amp; Screen Protectors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Walmart Protection Plan
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Unlocked Phones
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Patio &amp; Garden</a
                                  >
                                  <!-- Sub menu for "Patio & Garden" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/s-cute.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Men's Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Casual Shirts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Formal Suits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Jeans &amp; Pants
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outerwear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                T-Shirts
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/s-cute.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Women's Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dresses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Skirts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Blouses &amp; Tops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Handbags
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Coats &amp; Jackets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/flip-flops.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Footwear</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Men's Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Women's Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kids' Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sneakers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Boots
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sandals
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/fashion-model.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Fashion Accessories</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Belts
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Hats &amp; Caps
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Scarves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gloves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sunglasses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Watches
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/natural-food.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Seasonal Specials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Winter Wear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Summer Outfits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Rain Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Holiday Collection
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gift Sets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Sports &amp; Outdoors</a
                                  >
                                  <!-- Sub menu for "Sports & Outdoors" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/living-room.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Living Room</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sofa Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Coffee Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                TV Units
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Book Shelves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Decor
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/mixer.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Kitchen Appliances</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Microwave Ovens
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dishwashers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Gas Stoves
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Refrigerators
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Blenders
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/bedroom.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Bedroom</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Beds
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wardrobes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Dressing Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Nightstands
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Mattresses
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-home-decor-pharmaceutical-flaticons-lineal-color-flat-icons.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Home Decor</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Art
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vases
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Light Fixtures
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Curtains
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Carpets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/office/16/sofa.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Office Furniture</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Office Chairs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Desks
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cabinets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Meeting Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bookcases
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">Gift Cards</a>
                                  <!-- Sub menu for "Gift Cards" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/action.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Action Figures</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Superheroes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Anime Figures
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Movie Characters
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Collectibles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Robots
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-video-games-quarantine-flaticons-lineal-color-flat-icons-2.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Video Games</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Console Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                PC Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Mobile Games
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Virtual Reality
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Game Accessories
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-others-pike-picture/50/external-Educational-Toys-toy-others-pike-picture-3.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Educational Toys</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                STEM Kits
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Puzzles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Books
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Art Supplies
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Learning Tablets
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/outdoor-toilet.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Outdoor Toys</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Ride-Ons
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Scooters
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bicycles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sports Gear
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Swimming Pools
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/nesting-dolls.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Dolls &amp; Plush</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Fashion Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Animal Plush
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Character Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Interactive Dolls
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Collectibles
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!">
                                    Auto, Tires and Industrial
                                  </a>
                                  <!-- Sub menu for "Auto, Tires and Industrial" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/buy-upgrade--v1.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Bathroom Upgrades</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shower Heads
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vanity Units
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bath Tubs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tile Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bathroom Lighting
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cabinet Designs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Countertops
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Kitchen Islands
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Backsplash Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Appliance Upgrades
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/carpet-man.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Flooring Solutions</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Hardwood Flooring
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Tile Flooring
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Laminate Options
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Carpet Choices
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vinyl Flooring
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/improvement.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Outdoor Improvements</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Deck Designs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Patio Ideas
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Landscaping
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Garden Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Lighting
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-others-pike-picture/50/external-Painting-wallpaper-others-pike-picture.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Paint &amp; Wallpaper</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Paints
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Primers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wallpapers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Stencils
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Paint Brushes
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/color/48/plant-lighting.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Lighting &amp; Fixtures</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Ceiling Lights
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wall Lamps
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Outdoor Lights
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Chandeliers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Table Lamps
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="menu-column__item">
                                  <a class="menu-column__link" href="#!"
                                    >Movies, Music &amp; Books</a
                                  >
                                  <!-- Sub menu for "Movies, Music & Books" -->
                                  <div class="sub-menu">
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-6.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/external-victoruler-flat-victoruler/64/external-baby-clothing-baby-victoruler-flat-victoruler.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Baby Clothing</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Newborn Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Baby Dresses
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Rompers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Shoes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Accessories
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/feeding-baby.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Feeding Essentials</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bottles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                High Chairs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sterilizers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bibs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Sippy Cups
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/ring.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Diapering</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Diapers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Wipes
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Changing Tables
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Pails &amp; Refills
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Creams &amp; Ointments
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <!-- Menu column 2 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-5.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/emoji/48/baby-symbol-emoji.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Nursery</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Cribs
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Bedding Sets
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Decor
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Monitors
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Storage
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="sub-menu__column">
                                      <!-- Menu column 1 -->
                                      <div class="menu-column">
                                        <div class="menu-column__icon">
                                          <img
                                            alt=""
                                            class="menu-column__icon-1"
                                            src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                          />
                                          <img
                                            alt=""
                                            class="menu-column__icon-2"
                                            src="https://img.icons8.com/ios/50/books.png"
                                          />
                                        </div>
                                        <div class="menu-column__content">
                                          <h2 class="menu-column__heading">
                                            <a href="#!">Toys &amp; Books</a>
                                          </h2>
                                          <ul class="menu-column__list">
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Educational Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Soft Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Activity Toys
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Books
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Puzzles
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Thermometers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Baby Gates
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Humidifiers
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                First Aid
                                              </a>
                                            </li>
                                            <li class="menu-column__item">
                                              <a class="menu-column__link" href="#!">
                                                Vitamins &amp; Supplements
                                              </a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="navbar__item">
                  <a class="navbar__link" href="#!"
                    >Grocery
                    <img
                      alt=""
                      class="navbar__arrow icon"
                      src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down.svg"
                    />
                  </a>
                  <div class="dropdown js-dropdown">
                    <div class="dropdown__inner">
                      <div class="top-menu">
                        <div class="sub-menu sub-menu--not-main">
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-7.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/ingredients.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Grocery</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Grilling Foods</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Spring Flavors</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-8.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/rolls-royce.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Fresh Produce</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Celebrate Salad Month</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Healthy Living</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Flowers</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Chilled Dressing</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Fruit</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Salad Kits &amp; Bowls</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Organic Produce</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Vegetables</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-9.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/bread-and-rye.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Bakery &amp; Bread</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >New in Bakery</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sliced Bread</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Rolls &amp; Buns</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Tortillas</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Breakfast Breads</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Pies</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Cookies &amp; Brownies</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/external-bartama-outline-32-bartama-graphic/32/external-frozen-supermarket-bartama-outline-32-bartama-graphic.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Frozen</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Breakfast</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Potatoes</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Meals &amp; Snacks</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-snacks-vacation-planning-road-trip-flaticons-lineal-color-flat-icons.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Snacks</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Chips</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Popcorn &amp; Pretzels</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Crackers</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Salsa &amp; Dips</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/candy.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Candy</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Better for You</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Chocolate</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sugar Free Candy</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Gum</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Mints</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">On-the-Go</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios-glyphs/30/coctail-shot.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Cocktails &amp; Mixes Coffee</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Ground Coffee</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Whole Bean Coffee</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Coffee Pods</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Instant Coffee</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-7.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/office/16/tea--v1.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Beverages</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Water</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Soft Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fruit Juice</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sports Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Energy Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Tea</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Hot Chocolate &amp; Cocoa</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="navbar__item">
                  <a class="navbar__link" href="#!"
                    >Beauty
                    <img
                      alt=""
                      class="navbar__arrow icon"
                      src="/BTL_LTW/LTWeb/public/assets/icons/arrow-down.svg"
                    />
                  </a>
                  <div class="dropdown js-dropdown">
                    <div class="dropdown__inner">
                      <div class="top-menu">
                        <div class="sub-menu sub-menu--not-main">
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-7.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/ingredients.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Grocery</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Grilling Foods</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Spring Flavors</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-8.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/rolls-royce.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Fresh Produce</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Celebrate Salad Month</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Healthy Living</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Flowers</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Chilled Dressing</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Fruit</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Salad Kits &amp; Bowls</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Organic Produce</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fresh Vegetables</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-9.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/bread-and-rye.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Bakery &amp; Bread</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >New in Bakery</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sliced Bread</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Rolls &amp; Buns</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Tortillas</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Breakfast Breads</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Pies</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Cookies &amp; Brownies</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/external-bartama-outline-32-bartama-graphic/32/external-frozen-supermarket-bartama-outline-32-bartama-graphic.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Frozen</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Breakfast</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Potatoes</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Frozen Meals &amp; Snacks</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-1.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-snacks-vacation-planning-road-trip-flaticons-lineal-color-flat-icons.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Snacks</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Chips</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Popcorn &amp; Pretzels</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Crackers</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Salsa &amp; Dips</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-2.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios/50/candy.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Candy</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Better for You</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Chocolate</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sugar Free Candy</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Gum</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Mints</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">On-the-Go</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="sub-menu__column">
                            <!-- Menu column 1 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-4.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/ios-glyphs/30/coctail-shot.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Cocktails &amp; Mixes Coffee</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Ground Coffee</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Whole Bean Coffee</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Coffee Pods</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Instant Coffee</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!-- Menu column 2 -->
                            <div class="menu-column">
                              <div class="menu-column__icon">
                                <img
                                  alt=""
                                  class="menu-column__icon-1"
                                  src="/BTL_LTW/LTWeb/public/assets/img/category/cate-7.1.svg"
                                />
                                <img
                                  alt=""
                                  class="menu-column__icon-2"
                                  src="https://img.icons8.com/office/16/tea--v1.png"
                                />
                              </div>
                              <div class="menu-column__content">
                                <h2 class="menu-column__heading">
                                  <a href="#!">Beverages</a>
                                </h2>
                                <ul class="menu-column__list">
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Shop All</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Water</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Soft Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Fruit Juice</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Sports Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Energy Drinks</a
                                    >
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!">Tea</a>
                                  </li>
                                  <li class="menu-column__item">
                                    <a class="menu-column__link" href="#!"
                                      >Hot Chocolate &amp; Cocoa</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                                    href="/BTL_LTW/LTWeb/shipping"
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
                                    href="/BTL_LTW/LTWeb/shipping"
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