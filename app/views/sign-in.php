<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign in Grocery Mart</title>

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
        <script src="/BTL_LTW/LTWeb/public/assets/js/sign-in.js"></script>
    </head>

    <body>
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro d-md-none">
                <img
                    src="/BTL_LTW/LTWeb/public/assets/img/auth/intro.svg"
                    alt=""
                    class="auth__intro-img" />
                <p class="auth__intro-text">
                    The best of luxury brand values, high quality products, and
                    innovative services
                </p>
            </div>

            <!-- Auth content -->
            <div class="auth__content">
                <div class="auth__content-inner">
                    <!-- Logo -->
                    <a href="/BTL_LTW/LTWeb/" class="logo">
                        <img
                            src="/BTL_LTW/LTWeb/public/assets/icons/logo.svg"
                            alt="grocery"
                            class="logo__img" />
                        <h2 class="logo__title">Grocery</h2>
                    </a>
                    <h1 class="auth__heading">Hello Again!</h1>
                    <p class="auth__desc">
                        Welcome back to sign in. As a returning customer, you
                        have access to your previously saved all information.
                    </p>
                    <form action="/BTL_LTW/LTWeb/sign_in" class="form auth__form" method="post" onsubmit="checkSignInInput()">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="text"
                                    autofocus
                                    name="email"
                                    placeholder="Email"
                                    id="inputEmail"
                                    class="form__input"
                                    oninput="validateEmail()"
                                    value="<?= $_POST['email'] ?? 'phuc.dangphanminh@hcmut.edu.vn'?>"
                                    required />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/message.svg"
                                    alt=""
                                    class="form__input-icon" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg"
                                    alt=""
                                    class="form__input-icon-error" />
                            </div>
                            <p id="email_error" class="form__error">
                                Email is not in correct format
                            </p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    placeholder="Password"
                                    name="password"
                                    class="form__input"
                                    id="inputPassword"
                                    value="123456"
                                    oninput="validatePassword()"
                                    required
                                    minlength="6"
                                    maxLength="20" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/lock.svg"
                                    alt=""
                                    class="form__input-icon" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg"
                                    alt=""
                                    class="form__input-icon-error" />
                            </div>
                            <p id="password_error" class="form__error">
                                Password must have at least 6 characters
                            </p>
                        </div>
                        <div class="form__group form__group--inline">
                            <!-- Bỏ đi thuộc tính for của label -->
                            <!-- thì nó sẽ for cho các thẻ con của nó -->
                            <label class="form__checkbox">
                                <input
                                    type="checkbox"
                                    name="remember"
                                    id="inputRemember"
                                    class="form__checkbox-input d-none" 
                                    <?php if ($_POST['remember'] ?? false) echo 'checked' ?>
                                    />
                                <span class="form__checkbox-label"
                                    >Remember me</span
                                >
                            </label>

                            <a
                                href="/BTL_LTW/LTWeb/reset_password"
                                class="auth__link form__pull-right"
                                >Forgot Password</a
                            >
                        </div>

                        <div class="form__group auth__btn-group">
                            <button
                                type="submit"
                                id="login_submit"
                                class="btn btn--primary auth__btn form__submit-btn">
                                Login
                            </button>
                            <!-- <button
                                class="btn btn--outline auth__btn btn--no-margin">
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/google.svg"
                                    alt=""
                                    class="btn__icon icon" />
                                Sign in with Google
                            </button> -->
                        </div>
                    </form>

                    <p class="auth__text">
                        Don’t have an account yet?
                        <a
                            href="/BTL_LTW/LTWeb/sign_up"
                            class="auth__link auth__text-link"
                            >Sign Up</a
                        >
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
