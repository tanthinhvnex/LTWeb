<?php
    class Shipping {
        public function invoke() {
            require_once __DIR__ . '/../views/shipping.php';
        }
    }
    (new Shipping())->invoke();
?>