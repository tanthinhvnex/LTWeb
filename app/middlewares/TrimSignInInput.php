<?php
    class TrimSignInInput {
        public function handle() {
            $_POST['email'] = trim($_POST['email']);
            $_POST['password'] = trim($_POST['password']);
        }
    }
?>