<?php
    class Home {
        public function invoke() {
            require_once __DIR__ . '/../views/index.php';
        }
    }
    (new Home())->invoke();
?>