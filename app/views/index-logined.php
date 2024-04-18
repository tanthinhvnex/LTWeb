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

        <!-- Scripts -->
        <script src="/BTL_LTW/LTWeb/public/assets/js/scripts.js"></script>
    </head>

    <body>
        <!-- Header -->
        <header id="header" class="header"></header>
        <script>
            load("#header", "/BTL_LTW/LTWeb/app/views/components/header-logined.php");
        </script>

        <div class="container home">
            <div class="home__container">
                <!-- Slideshow -->
                <div class="slideshow">
                    <div class="slideshow__inner">
                        <div class="slideshow__item">
                            <picture>
                                <source
                                    media="(max-width: 767.98px)"
                                    srcset="
                                        /BTL_LTW/LTWeb/public/assets/img/slideshow/item-1-md.png
                                    " />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/img/slideshow/item-1.png"
                                    alt=""
                                    class="slideshow__img" />
                            </picture>
                        </div>
                    </div>
                    <div class="slideshow__page">
                        <span class="slideshow__slider"></span>
                    </div>
                </div>
            </div>

            <!-- Browse Categories -->
            <div class="home__container">
                <div class="home__row">
                    <div class="home__heading">Browse Categories</div>
                </div>
                <div class="home__cate row row-cols-3 row-cols-md-1">
                    <!-- Category item 1 -->
                    <div class="col">
                        <a href="#!">
                            <article class="cate-item">
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/img/category-item/item-1.png"
                                    alt=""
                                    class="cate-item__thumb" />
                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$24 - $150</h3>
                                    <p class="cate-item__desc">
                                        New sumatra mandeling coffe blend
                                    </p>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- Category item 2 -->
                    <div class="col">
                        <a href="#!">
                            <article class="cate-item">
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/img/category-item/item-2.png"
                                    alt=""
                                    class="cate-item__thumb" />
                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$37 - $160</h3>
                                    <p class="cate-item__desc">
                                        Espresso arabica and robusta beans
                                    </p>
                                </div>
                            </article>
                        </a>
                    </div>
                    <!-- Category item 3 -->
                    <div class="col">
                        <a href="#!">
                            <article class="cate-item">
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/img/category-item/item-3.png"
                                    alt=""
                                    class="cate-item__thumb" />
                                <div class="cate-item__info">
                                    <h3 class="cate-item__title">$32 - $160</h3>
                                    <p class="cate-item__desc">
                                        Lavazza top class whole bean coffee
                                        blend
                                    </p>
                                </div>
                            </article>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Browse Products -->
            <section class="home__container">
                <div class="home__row">
                    <h2 class="home__heading">Total LavAzza 1320</h2>
                    <div id="filter"></div>
                    <script>
                        load("#filter", "/BTL_LTW/LTWeb/app/views/components/filter.php");
                    </script>
                </div>

                <div class="row row-cols-5 row-cols-lg-2 row-cols-sm-1 g-3">
                    <!-- Product card 1 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Coffee Beans - Espresso Arabica and Robusta
                                    Beans</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$47.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 2 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Lavazza Coffee Blends - Try the Italian
                                    Espresso</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$53.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 3 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-3.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Lavazza - Cafe Espresso Black Tin - Ground
                                    coffee</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$99.99</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">5.0</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 4 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Mountain Grown - Espresso Coffee Beans</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$38.65</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">4.4</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 5 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Coffee Beans - Espresso Arabica and Robusta
                                    Beans</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$47.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 6 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Lavazza Coffee Blends - Try the Italian
                                    Espresso</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$53.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 7 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-2.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Lavazza - Caffè Espresso Black Tin - Ground
                                    coffee</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$99.99</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">5.0</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 8 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-1.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1">Abc</a>
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$38.65</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">4.4</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 9 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Coffee Beans - Espresso Arabica and Robusta
                                    Beans</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$47.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">4.3</span>
                            </div>
                        </article>
                    </div>

                    <!-- Product card 10 -->
                    <div class="col">
                        <article class="product-card">
                            <div class="product-card__img-wrap">
                                <a href="/BTL_LTW/LTWeb/detail?id=1">
                                    <img
                                        src="/BTL_LTW/LTWeb/public/assets/img/product/item-4.png"
                                        alt=""
                                        class="product-card__thumb" />
                                </a>
                                <button class="like-btn product-card__like-btn">
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
                                <a href="/BTL_LTW/LTWeb/detail?id=1"
                                    >Lavazza Coffee Blends - Try the Italian
                                    Espresso Lavazza Coffee Blends</a
                                >
                            </h3>
                            <div class="product-card__row">
                                <span class="product-card__price">$53.00</span>
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/star.svg"
                                    alt=""
                                    class="product-card__star" />
                                <span class="product-card__score">3.4</span>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer"></footer>
        <script>
            load("#footer", "/BTL_LTW/LTWeb/app/views/components/footer.php");
        </script>
    </body>
</html>
