<?php
    
    require_once __DIR__ . '/../models/ProfileModel.php';
    class Profile {
        public function invoke() {
            $profile = new ProfileModel();
            $user = $profile->getUserByEmail($_SESSION['user']->email);
            $creditCards = $profile->getCreditCardsByEmail($_SESSION['user']->email);
            $addresses = $profile->getAddressesByEmail($_SESSION['user']->email);
            require_once __DIR__ . '/../views/profile.php';
        }
    }
    (new Profile())->invoke();
?>