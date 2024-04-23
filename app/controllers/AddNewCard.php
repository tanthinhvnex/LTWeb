<?php
    class AddNewCart {
        public function invoke() {
            require_once __DIR__ . '/../views/add-new-card.php';
        }
    }
    (new AddNewCart())->invoke();
?>