<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Grocery Mart</title>

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

        <!-- JS -->
        <script src="/BTL_LTW/LTWeb/public/assets/js/scripts.js"></script>
        <script src="/BTL_LTW/LTWeb/public/assets/js/product-detail.js"></script>
    </head>

    <body>
        <!-- Header -->
        <header id="header" class="header"></header>
        <script>
            load("#header", "/BTL_LTW/LTWeb/app/views/components/header-logined.php");
        </script>

        <!-- MAIN -->
        <main class="product-page">
            <div class="container">
                <!-- Search bar-->
                <div class="product-container product-info-content">
                    <div class="search-bar d-none d-md-flex">
                        <input
                            class="search-bar__input"
                            type="text"
                            name=""
                            id=""
                            placeholder="Search for item" />
                        <button class="search-bar__submit">
                            <img
                                src="/BTL_LTW/LTWeb/public/assets/icons/search.svg"
                                alt=""
                                class="search-bar__icon icon" />
                        </button>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <div class="product-container product-info-content">
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#!" class="breadcrumbs__link">
                                Departments
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg"
                                    alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link">
                                Coffee
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg"
                                    alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link">
                                Coffee Beans
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/arrow-right.svg"
                                    alt="" />
                            </a>
                        </li>
                        <li>
                            <a
                                href="#!"
                                class="breadcrumbs__link breadcrumbs__link--current"
                                >LavAzza</a
                            >
                        </li>
                    </ul>
                </div>

                <!-- Product info -->
                <div class="product-container product-info-content">
                    <div class="row">
                        <div class="col-5 col-xl-6 col-lg-12">
                            <div class="prod-preview">
                                <div class="prod-preview__list">
                                    <div class="prod-preview__item">
                                        <img
                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                            alt=""
                                            class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                            alt=""
                                            class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                            alt=""
                                            class="prod-preview__img" />
                                    </div>
                                    <div class="prod-preview__item">
                                        <img
                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                            alt=""
                                            class="prod-preview__img" />
                                    </div>
                                </div>
                                <div class="prod-preview__thumbs">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                        alt=""
                                        class="prod-preview__thumb-img prod-preview__thumb-img--current" />
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                        alt=""
                                        class="prod-preview__thumb-img" />
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                        alt=""
                                        class="prod-preview__thumb-img" />
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                        alt=""
                                        class="prod-preview__thumb-img" />
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-xl-6 col-lg-12">
                            <form action="" class="form">
                                <section class="prod-info">
                                    <h1 class="prod-info__heading">
                                        Coffee Beans - Espresso Arabica and
                                        Robusta Beans
                                    </h1>
                                    <div class="row">
                                        <div class="col-5 col-xxl-6 col-xl-12">
                                            <div class="prod-prop">
                                                <img
                                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                    alt=""
                                                    class="prod-prop__icon" />
                                                <h4 class="prod-prop__title">
                                                    (3.5) 1100 reviews
                                                </h4>
                                            </div>
                                            <label
                                                for=""
                                                class="form__label prod-info__label"
                                                >Number</label
                                            >
                                            <!--<div
                                                class="filter__form-group filter__form-group--inline">
                                                <div>
                                                    <div
                                                        class="filter__form-text-input filter__form-text-input--small">
                                                        <input
                                                            type="text"
                                                            name=""
                                                            id=""
                                                            class="filter__form-input filter__form-input--fsize"
                                                            value="1" />
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="cart-item__input" style="border: none !important; padding-left: 0px !important;">
                                                <button class="cart-item__input-btn" id ="minus" type="button">
                                                    <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/minus.svg" alt="" />
                                                </button>
                                                <span id = "number">0</span>
                                                <button class="cart-item__input-btn" id = "plus" type = "button">
                                                    <img class="icon" src="/BTL_LTW/LTWeb/public/assets/icons/plus.svg" alt="" />
                                                </button>
                                            </div>

                                            <label
                                                for=""
                                                class="form__label prod-info__label"
                                                >Size</label
                                            >

                                            <div class="filter__form-group">
                                                <div class="form__tags">
                                                    <div
                                                        class="form__tag prod-info__tag">
                                                        <label
                                                            class="radio"
                                                            for="small">
                                                            <input
                                                                value="small"
                                                                type="radio"
                                                                name="size"
                                                                id="small" />
                                                            Small (500g)
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form__tag prod-info__tag">
                                                        <label
                                                            class="radio"
                                                            for="medium">
                                                            <input
                                                                value="medium"
                                                                type="radio"
                                                                name="size"
                                                                id="medium" />
                                                            Medium (1000g)
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form__tag prod-info__tag">
                                                        <label
                                                            class="radio"
                                                            for="large">
                                                            <input
                                                                value="large"
                                                                type="radio"
                                                                name="size"
                                                                id="large" />
                                                            Large (2000g)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 col-xxl-6 col-xl-12">
                                            <div class="prod-props">
                                                <div class="prod-prop">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/document.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon" />
                                                    <h4
                                                        class="prod-prop__title">
                                                        Compare
                                                    </h4>
                                                </div>
                                                <div class="prod-prop">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/buy.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon" />
                                                    <div>
                                                        <h4
                                                            class="prod-prop__title">
                                                            Delivery
                                                        </h4>
                                                        <p
                                                            class="prod-prop__desc">
                                                            From $6 for 1-3 days
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="prod-prop">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/bag.svg"
                                                        alt=""
                                                        class="prod-prop__icon icon" />
                                                    <div>
                                                        <h4
                                                            class="prod-prop__title">
                                                            Pickup
                                                        </h4>
                                                        <p
                                                            class="prod-prop__desc">
                                                            Out of 2 store,
                                                            today
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="prod-info__card">
                                                    <div class="prod-info__row">
                                                        <span
                                                            class="prod-info__price"
                                                            >$500.00</span
                                                        >
                                                        <span
                                                            class="prod-info__tax"
                                                            >10%</span
                                                        >
                                                    </div>
                                                    <p
                                                        class="prod-info__total-price">
                                                        $540.00
                                                    </p>
                                                    <div class="prod-info__row">
                                                        <button
                                                            class="btn btn--primary prod-info__add-to-cart">
                                                            Add to cart
                                                        </button>
                                                        <button
                                                            class="like-btn prod-info__like-btn">
                                                            <img
                                                                src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                                alt=""
                                                                class="like-btn__icon icon" />
                                                            <img
                                                                src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                                alt=""
                                                                class="like-btn__icon--liked" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Product content -->
                <div class="product-container">
                    <div class="prod-tab js-tabs">
                        <ul class="prod-tab__list">
                            <li class="prod-tab__item prod-tab__item--current">
                                Description
                            </li>
                            <li class="prod-tab__item">Review (1100)</li>
                            <li class="prod-tab__item">Similar</li>
                        </ul>

                        <div class="prod-tab__contents">
                            <div
                                class="prod-tab__content prod-tab__content--current">
                                <div class="row">
                                    <div
                                        class="col-8 offset-2 col-xl-10 offset-xl-1 col-lg-12 offset-lg-0">
                                        <div class="text-content">
                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet
                                                <a href="#!">consectetur</a>,
                                                adipisicing elit. Esse dolor
                                                vero ad doloribus sint totam
                                                animi consequatur
                                                <a href="#!">beatae</a> et
                                                officia. Lorem ipsum dolor sit,
                                                amet consectetur adipisicing
                                                elit. Quos, laboriosam. Lorem
                                                ipsum dolor sit amet consectetur
                                                adipisicing elit. Nam dolorem
                                                veritatis ex reiciendis aliquam
                                                perspiciatis temporibus dolorum
                                                provident quasi asperiores?
                                            </p>

                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.
                                                Esse dolor vero ad doloribus
                                                sint totam animi consequatur
                                                beatae et officia.
                                            </p>
                                            <h3>Lorem ipsum dolor sit amet.</h3>
                                            <blockquote>
                                                <p>
                                                    Lorem ipsum dolor sit amet
                                                    consectetur, adipisicing
                                                    elit. Esse dolor vero ad
                                                    doloribus sint totam animi
                                                    consequatur beatae et
                                                    officia.
                                                </p>
                                            </blockquote>
                                            <p>
                                                <img
                                                    src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                                    alt="" />
                                                <em
                                                    >Lorem ipsum, dolor sit amet
                                                    consectetur adipisicing
                                                    elit. Facilis, fugiat!</em
                                                >
                                            </p>
                                            <hr />

                                            <h2>Lorem ipsum dolor sit amet.</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.
                                                Esse dolor vero ad doloribus
                                                sint totam animi consequatur
                                                beatae et officia.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.
                                                Esse dolor vero ad doloribus
                                                sint totam animi consequatur
                                                beatae et officia.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet
                                                consectetur, adipisicing elit.
                                                Esse dolor vero ad doloribus
                                                sint totam animi consequatur
                                                beatae et officia.
                                            </p>
                                            <p>
                                                <img
                                                    src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                                    alt="" />
                                                <em
                                                    >Lorem ipsum, dolor sit amet
                                                    consectetur adipisicing
                                                    elit. Facilis, fugiat!</em
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-tab__content">
                                <div class="prod-content">
                                    <h2 class="prod-content__heading">
                                        What our customers are saying
                                    </h2>
                                    <div
                                        class="row row-cols-3 gx-lg-2 row-cols-md-1 gy-md-3">
                                        <!-- Review card 1 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div
                                                    class="review-card__content">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-1.png"
                                                        alt=""
                                                        class="review-card__avatar" />
                                                    <div
                                                        class="review-card__info">
                                                        <h4
                                                            class="review-card__title">
                                                            Jakir Hussen
                                                        </h4>
                                                        <p
                                                            class="review-card__desc">
                                                            Great product, I
                                                            love this Coffee
                                                            Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="review-card__rating">
                                                    <div
                                                        class="review-card__star-list">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                    </div>
                                                    <span
                                                        class="review-card__rating-title"
                                                        >(3.5) Review</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review card 2 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div
                                                    class="review-card__content">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-2.png"
                                                        alt=""
                                                        class="review-card__avatar" />
                                                    <div
                                                        class="review-card__info">
                                                        <h4
                                                            class="review-card__title">
                                                            Jubed Ahmed
                                                        </h4>
                                                        <p
                                                            class="review-card__desc">
                                                            Awesome Coffee, I
                                                            love this Coffee
                                                            Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="review-card__rating">
                                                    <div
                                                        class="review-card__star-list">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                    </div>
                                                    <span
                                                        class="review-card__rating-title"
                                                        >(3.5) Review</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review card 3 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div
                                                    class="review-card__content">
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/img/avatar/avatar-3.png"
                                                        alt=""
                                                        class="review-card__avatar" />
                                                    <div
                                                        class="review-card__info">
                                                        <h4
                                                            class="review-card__title">
                                                            Delwar Hussain
                                                        </h4>
                                                        <p
                                                            class="review-card__desc">
                                                            Great product, I
                                                            like this Coffee
                                                            Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="review-card__rating">
                                                    <div
                                                        class="review-card__star-list">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-half.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg"
                                                            alt=""
                                                            class="review-card__star" />
                                                    </div>
                                                    <span
                                                        class="review-card__rating-title"
                                                        >(3.5) Review</span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        
                                </div>
                                <div class="row">
                                    <div class="col">
                                      <div class="prod-content " style="max-width: 700px;">
                                        <h2 class="prod-content__heading">Add Your Review</h2>
                                        <form id="reviewForm" class="review-form">
                                            <div class="mb-3 row align-items-center mt-5">
                                                <label for="rating" class="form-label col-auto rating-label">Rating</label>
                                                <div class="review-card__rating col">
                                                    <div class="review-card__star-list d-flex">
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg" alt="" class="review-card__star" data-value="1" />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg" alt="" class="review-card__star" data-value="2" />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg" alt="" class="review-card__star" data-value="3" />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg" alt="" class="review-card__star" data-value="4" />
                                                        <img src="/BTL_LTW/LTWeb/public/assets/icons/star-blank.svg" alt="" class="review-card__star" data-value="5" />
                                                    </div>
                                                    <input type="hidden" id="rating" name="rating" value="0">
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-5">
            
                                                <textarea name="comment" id="comment" placeholder="Leave a comment" class="form__text-area-input" ></textarea>
                                            </div>
                                            <div class="mb-3 mt-3 mt-md-5 btn-ctn">
                                                <button type="submit" class="btn btn--primary">Send</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prod-tab__content">
                                <div class="prod-content">
                                    <h2 class="prod-content__heading">
                                        Similar items you might like
                                    </h2>
                                    <div
                                        class="row row-cols-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-2">
                                        <!-- Product card 1 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn like-btn--liked product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Coffee Arabica and
                                                        Robusta Beans</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$47.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.3</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 2 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Lavazza - Try the
                                                        Italian Espresso</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$53.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >3.4</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 3 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        Espresso Black Tin -
                                                        Ground coffee</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$99.99</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >5.0</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 4 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Espresso Coffee
                                                        Beans</a
                                                    >
                                                </h3>
                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$38.65</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.4</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 5 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn like-btn--liked product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Espresso Arabica and
                                                        Robusta Beans</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$47.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.3</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 6 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        Try the Italian
                                                        Espresso</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$53.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >3.4</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 7 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        Espresso Black Tin -
                                                        Ground coffee</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$99.99</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >5.0</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 8 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        Grown - Espresso Coffee
                                                        Beans</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$38.65</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.4</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 9 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn like-btn--liked product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Espresso Arabica and
                                                        Robusta Beans</a
                                                    >
                                                </h3>
                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$47.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.3</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 10 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Lavazza Coffee Blends -
                                                        Try the Italian
                                                        Espresso</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$53.00</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >3.4</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 11 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Lavazza - Espresso
                                                        Black Tin - Ground
                                                        coffee</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$99.99</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >5.0</span
                                                    >
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Product card 12 -->
                                        <div class="col">
                                            <article class="product-card">
                                                <div
                                                    class="product-card__img-wrap">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                                            alt=""
                                                            class="product-card__thumb" />
                                                    </a>
                                                    <button
                                                        class="like-btn product-card__like-btn">
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart.svg"
                                                            alt=""
                                                            class="like-btn__icon icon" />
                                                        <img
                                                            src="/BTL_LTW/LTWeb/public/assets/icons/heart-red.svg"
                                                            alt=""
                                                            class="like-btn__icon--liked" />
                                                    </button>
                                                </div>
                                                <h3 class="product-card__title">
                                                    <a
                                                        href="/BTL_LTW/LTWeb/detail?id=1"
                                                        >Mountain Grown -
                                                        Espresso Coffee Beans</a
                                                    >
                                                </h3>

                                                <div class="product-card__row">
                                                    <span
                                                        class="product-card__price"
                                                        >$38.65</span
                                                    >
                                                    <img
                                                        src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                                        alt=""
                                                        class="product-card__star" />
                                                    <span
                                                        class="product-card__score"
                                                        >4.4</span
                                                    >
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
        </main>
        <!-- Footer -->
        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
        </script>
        <!-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Lấy tất cả các button với class like-btn product-card__like-btn
                var likeButtons = document.querySelectorAll(
                    ".like-btn.prod-info__like-btn"
                );

                // Function để toggle class like-btn--liked
                function toggleLike() {
                    this.classList.toggle("like-btn--liked");
                }

                // Thêm sự kiện click cho mỗi button
                likeButtons.forEach(function (button) {
                    event.preventDefault();
                    button.addEventListener("click", toggleLike);
                });
            });
        </script> -->
    </body>
</html>