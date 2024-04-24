<?php
    class TrimSignUpInput {
        public function handle() {
            $_POST['email'] = trim($_POST['email']);
            $_POST['password'] = trim($_POST['password']);
            $_POST['confirm'] = trim($_POST['confirm']);
        }
    }
?>