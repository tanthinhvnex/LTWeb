<?php
    require_once __DIR__ . '/../models/ProfileModel.php';

    class EditPersonalInfo {
        public function invoke() {
            $profile = new ProfileModel();
            $user = $profile->getUserByEmail($_SESSION['user']->email);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $currentEmail = $_SESSION['user']->email;
                $email = $_POST['email'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $profile = new ProfileModel();
                // echo $currentEmail;
                // echo $email;
                // echo $fullname;
                // echo $phone;
                // echo $password;
                $profile->updateUserInfo($currentEmail,$email, $fullname, $phone, $password);
            }
            require_once __DIR__ . '/../views/edit-personal-info.php';
        }
    }
    (new EditPersonalInfo())->invoke();
?>