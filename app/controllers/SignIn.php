<?php
    require_once __DIR__ . '/../models/LoginModel.php';
    require_once __DIR__ . '/../Validator.php';

    class SignIn {
        public function invoke() {
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $remember = $_POST['remember'] ?? false;

                if (InputValidator::isValidEmail($email) && InputValidator::isValidLength($password, 6, 20)) {
                    $model = new LoginModel();
                    $user = $model->login($email,$password,$remember);
                    if($user != null) {
                        $_SESSION['user'] = $user;
                        setcookie("rmb_tk", $user->remember_me_cookie, time() + 30 * 24 * 60 * 60, "/");
                        header("location: /BTL_LTW/LTWeb");
                        exit();
                    }
                    else {
                        require_once __DIR__ . '/../views/sign-in.php';
                        exit();
                    }
                }
                require_once __DIR__ . '/../views/sign-in.php';
                exit();
            }
            else {
                if($_COOKIE['rmb_tk'] ?? false) {
                    $model = new LoginModel();
                    $user = $model->checkRemember($_COOKIE['rmb_tk']);
                    if ($user) {
                        $_SESSION['user'] = $user;
                        setcookie("rmb_tk", $_COOKIE['rmb_tk'], time() + 30 * 24 * 60 * 60, "/");
                        header("location: /BTL_LTW/LTWeb");
                        exit();
                    }
                }

                require_once __DIR__ . '/../views/sign-in.php';
                exit();
            }
        }
    }
    (new SignIn())->invoke();
?>