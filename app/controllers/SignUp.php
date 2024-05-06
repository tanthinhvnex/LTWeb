<?php
        require_once __DIR__ . '/../models/SignUpModel.php';
        require_once __DIR__ . '/../Validator.php';
    
    class SignUp {
        public function invoke() {
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm = $_POST['confirm'];

                if (InputValidator::isValidEmail($email) && InputValidator::isValidLength($password, 6, 20) && InputValidator::isValidLength($confirm, 6, 20) && InputValidator::isMatchingPassword($password, $confirm)) {
                    $model = new SignUpModel();
                    $user = $model->signup($email, $password);
                    if ($user) {
                        $_SESSION['signup_success'] = true;
                        header("location: /BTL_LTW/LTWeb/sign_in");
                        exit();
                    }
                    else {
                        echo "<script>alert('Tài khoản đã tồn tại')</script>";
                        require_once __DIR__ . '/../views/sign-up.php';
                        exit();
                    }
                }
                else {
                    echo "<script>alert('Có lỗi xảy ra')</script>";
                    require_once __DIR__ . '/../views/sign-up.php';
                    exit();
                }
            }
            else {
                require_once __DIR__ . '/../views/sign-up.php';
                exit();
            }
        }
    }
    (new SignUp())->invoke();
?>