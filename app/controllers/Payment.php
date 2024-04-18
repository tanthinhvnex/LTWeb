<?php
    require_once __DIR__ . '/../models/Model.php';

    class Payment {
        public function invoke() {
            require_once __DIR__ . '/../views/payment.php';
        }
    }
    (new Payment())->invoke();
?>