<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminUser {
        public function invoke() {
            require_once __DIR__ . '/../views/users-admin.php';
            exit();
        }
    }
    (new AdminUser())->invoke();
?>