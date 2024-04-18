<?php
    require_once __DIR__ . '/../models/Model.php';

    class SignIn {
        public function invoke() {
            require_once __DIR__ . '/../views/sign-in.php';
        }
    }
    (new SignIn())->invoke();
?>