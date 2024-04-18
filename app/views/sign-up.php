<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Grocery Mart</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/BTL_LTW/LTWeb/public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/BTL_LTW/LTWeb/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/BTL_LTW/LTWeb/public/assets/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/fonts/stylesheet.css">


    <!-- Styles -->
    <link rel="stylesheet" href="/BTL_LTW/LTWeb/public/assets/css/main.css">

    <!-- Scripts -->
    <script src="/BTL_LTW/LTWeb/public/assets/js/scripts.js"></script>
</head>

<body>
    <main class="auth">
        <!-- Auth intro -->
        <div class="auth__intro">
            <!-- Logo -->
            <a href="/BTL_LTW/LTWeb/" class="logo d-none d-md-flex auth__intro-logo">
                <img src="/BTL_LTW/LTWeb/public/assets/icons/logo.svg" alt="grocery" class="logo__img">
                <h1 class="logo__title">Grocery </h1>
            </a>
            <img src="/BTL_LTW/LTWeb/public/assets/img/auth/intro.svg" alt="" class="auth__intro-img"></img>
            <p class="auth__intro-text">The best of luxury brand values, high quality products, and innovative services
            </p>
            <button class="auth__intro-next d-none d-md-flex js-toggle" toggle-target="#auth__content">
                <img src="/BTL_LTW/LTWeb/public/assets/img/auth/intro-arrow.svg" alt="">
            </button>
        </div>

        <!-- Auth content -->
        <div id="auth__content" class="auth__content hide">
            <div class="auth__content-inner">
                <!-- Logo -->
                <a href="/BTL_LTW/LTWeb/" class="logo">
                    <img src="/BTL_LTW/LTWeb/public/assets/icons/logo.svg" alt="grocery" class="logo__img">
                    <h1 class="logo__title">Grocery </h1>
                </a>
                <h1 class="auth__heading">Sign Up</h1>
                <p class="auth__desc">Let’s create your account and Shop like a pro and save money.</p>
                <form action="/BTL_LTW/LTWeb/sign_up" class="form auth__form" method="post">
                    <div class="form__group">
                        <div class="form__text-input">
                            <input type="email" autofocus placeholder="Email" class="form__input" required>
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/message.svg" alt="" class="form__input-icon">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error">
                        </div>
                        <p class="form__error">Email is not in correct format</p>
                    </div>
                    <div class="form__group">
                        <div class="form__text-input">
                            <input type="password" placeholder="Password" class="form__input" required minlength="6">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/lock.svg" alt="" class="form__input-icon">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error">
                        </div>
                        <p class="form__error">Password at least 6 characters</p>
                    </div>
                    <div class="form__group">
                        <div class="form__text-input">
                            <input type="password" placeholder="Confirm Password" class="form__input" required
                                minlength="6">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/lock.svg" alt="" class="form__input-icon">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg" alt="" class="form__input-icon-error">
                        </div>
                        <p class="form__error">Password at least 6 characters</p>
                    </div>

                    <!-- <div class="form__group auth__btn-group">
                        <button class="btn btn--primary auth__btn form__submit-btn">Sign Up</button>
                        <button class="btn btn--outline auth__btn btn--no-margin">
                            <img src="/BTL_LTW/LTWeb/public/assets/icons/google.svg" alt="" class="btn__icon icon">
                            Sign in with Google
                        </button>
                    </div> -->
                </form>

                <p class="auth__text">Already have an account?
                    <a href="/BTL_LTW/LTWeb/sign_in" class="auth__link auth__text-link">Sign In</a>
                </p>
            </div>
        </div>
    </main>
    <script>window.dispatchEvent(new Event("template-loaded"));</script>
</body>

</html>