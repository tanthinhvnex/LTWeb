<?php
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Database.php';

    class SignupModel {
        public function signup($email, $password) {
            global $connection;
            $signupQuery = mysqli_query($connection, "Call Signup('$email', '$password')");
            $user = mysqli_fetch_assoc($signupQuery);
            if ($user) {
                return true;
            }
            else {
                return false;
            }
        }
    }
?>
