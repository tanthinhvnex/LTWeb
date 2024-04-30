<?php

    class ResetPassword {
        public function invoke() {
            require_once __DIR__ . '/../views/reset-password.php';
        }
    }
    
    (new ResetPassword())->invoke();
?>