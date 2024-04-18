<?php
    require_once __DIR__ . '/../models/Model.php';

    class NewPassword {
        public function invoke() {
            require_once __DIR__ . '/../views/new-password.php';
        }
    }
    (new NewPassword())->invoke();
?>