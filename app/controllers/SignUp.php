<?php
    require_once __DIR__ . '/../models/Model.php';

    class SignUp {
        public function invoke() {
            require_once __DIR__ . '/../views/sign-up.php';
        }
    }
    (new SignUp())->invoke();
?>