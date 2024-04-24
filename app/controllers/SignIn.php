<?php
    require_once __DIR__ . '/../models/LoginModel.php';
    require_once __DIR__ . '/../Validator.php';

    class SignIn {
        public function invoke() {
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (InputValidator::isValidEmail($email) && InputValidator::isValidLength($password, 6, 20)) {
                    $model = new LoginModel();
                    $user = $model->login($email,$password);
                    if($user != null) {
                        $_SESSION['user'] = $user;
                        $_SESSION[''] = $user;
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
                require_once __DIR__ . '/../views/sign-in.php';
            }
        }
    }
    (new SignIn())->invoke();
?>