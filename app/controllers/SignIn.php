<?php
    require_once __DIR__ . '/../models/LoginModel.php';

    class SignIn {
        public function invoke() {
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $model = new LoginModel();
                $user = $model->login($email,$password);
                $_SESSION['user'] = $user;
                header("location: /BTL_LTW/LTWeb");
                exit();
            }   
            else {
                require_once __DIR__ . '/../views/sign-in.php';
            }
        }
    }
    (new SignIn())->invoke();
?>