<?php
    require_once __DIR__ . '/../models/Model.php';

    class Favourite {
        public function invoke() {
            require_once __DIR__ . '/../views/favourite.php';
        }
    }
    (new Favourite())->invoke();
?>