<?php
    class Detail {
        public function invoke() {
            require_once __DIR__ . '/../views/product-detail.php';
        }
    }
    (new Detail())->invoke();
?>