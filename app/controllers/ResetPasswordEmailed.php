<?php
    class ResetPasswordEmailed {
        public function invoke() {
            require_once __DIR__ . '/../views/reset-password-emailed.php';
        }
    }
    (new ResetPasswordEmailed())->invoke();
?>