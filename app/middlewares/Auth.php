<?php
    class Auth {
        public function handle() {
            if (!($_SESSION['user'] ?? false)) {
                header('location: /BTL_LTW/LTWeb/sign_in');
                exit();
            }
        }
    }
?>