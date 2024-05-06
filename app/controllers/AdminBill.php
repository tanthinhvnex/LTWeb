<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminBill {
        public function invoke() {
            require_once __DIR__ . '/../views/bills-admin.php';
            exit();
        }
    }
    (new AdminBill())->invoke();
?>