<?php
    require_once __DIR__ . '/../models/Model.php';

    class Profile {
        public function invoke() {
            require_once __DIR__ . '/../views/profile.php';
        }
    }
    (new Profile())->invoke();
?>