<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reset your password | Grocery Mart</title>

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
        <main class="auth">
            <!-- Auth intro -->
            <div class="auth__intro d-md-none">
                <img
                    src="/BTL_LTW/LTWeb/public/assets/img/auth/forgot-password.png"
                    alt=""
                    class="auth__intro-img" />
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
                    <h1 class="auth__heading">Reset your password</h1>
                    <!-- <p class="auth__desc">
                        Enter your email and we'll send you a link to reset your
                        password
                    </p> -->
                    <div class="auth__message message <?php echo ($_SESSION['errorMessage']) ? 'alert alert-danger' : 'message--success'; ?>">
                        <?php echo ($_SESSION['errorMessage']) ? $_SESSION['errorMessage'] : 'We have emailed your password reset link'; ?>
                    </div>

                    <!-- <form
                        action="/indexlogined.html"
                        class="form auth__form auth__form-forgot"
                        method="post">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="email"
                                    placeholder="Email"
                                    class="form__input"
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
                            <p class="form__error">
                                Email is not in correct format
                            </p>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button
                                class="btn btn--primary auth__btn form__submit-btn">
                                Reset Password
                            </button>
                        </div>
                    </form> -->

                    <p class="auth__text">
                        <a href="<?php echo ($_SESSION['errorMessage']) ? '/BTL_LTW/LTWeb/reset_password' : '/BTL_LTW/LTWeb/sign_in'; ?>" class="auth__link auth__text-link">
                            <?php echo ($_SESSION['errorMessage']) ? 'Back to Reset Password' : 'Back to Sign in'; ?>
                        </a>
                    </p>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>
