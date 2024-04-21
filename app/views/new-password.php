<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create new password</title>

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
                    class="auth__intro-img"
                    style="--width: 424px" />
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
                    <h1 class="auth__heading">Create New Password</h1>
                    <p class="auth__desc">
                        At least 6 characters, with uppercase and lowercase
                        letters.
                    </p>

                    <form
                        action="/BTL_LTW/LTWeb/sign_in"
                        class="form auth__form auth__form-forgot"
                        method="post">
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    autofocus
                                    placeholder="New Password"
                                    class="form__input"
                                    required
                                    minlength="6" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/lock.svg"
                                    alt=""
                                    class="form__input-icon" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg"
                                    alt=""
                                    class="form__input-icon-error" />
                            </div>
                            <p class="form__error">
                                Password at least 6 characters
                            </p>
                        </div>
                        <div class="form__group">
                            <div class="form__text-input">
                                <input
                                    type="password"
                                    placeholder="Confirm New Password"
                                    class="form__input"
                                    required
                                    minlength="6" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/lock.svg"
                                    alt=""
                                    class="form__input-icon" />
                                <img
                                    src="/BTL_LTW/LTWeb/public/assets/icons/form-error.svg"
                                    alt=""
                                    class="form__input-icon-error" />
                            </div>
                            <p class="form__error">
                                Password at least 6 characters
                            </p>
                        </div>
                        <div class="form__group auth__btn-group">
                            <button
                                class="btn btn--primary auth__btn form__submit-btn">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <script>
            window.dispatchEvent(new Event("template-loaded"));
        </script>
    </body>
</html>