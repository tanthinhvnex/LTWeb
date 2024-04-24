<?php
    class Checkout {
        public function invoke() {
            require_once __DIR__ . '/../views/checkout.php';
        }
    }
    (new Checkout())->invoke();
?>