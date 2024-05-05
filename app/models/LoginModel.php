<?php
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Database.php';

    class LoginModel {
        public function login($email, $password, $remember) {
            global $connection;
            $loginQuery = mysqli_query($connection, "Call Login('$email', '$password', " . (($remember) ? "true" : "false") . ")");
            $user = mysqli_fetch_assoc($loginQuery);
            if ($user) {
                if ($remember) {
                    return new User($user['email'], $user['fullname'], $user['role'], $user['phone'], $user['RMC_ID']);//RMC_ID: remember_me_cookie_ID
                }
                else {
                    return new User($user['email'], $user['fullname'], $user['role'], $user['phone']);
                }
            }
            else {
                return null;
            }
        }

        public function checkRemember($rmb_tk) {//remember token
            global $connection;
            $rememberQuery = mysqli_query($connection, "SELECT email, fullname, phone, role FROM user as u JOIN user_have_remember_me_cookie as uhrmc ON u.email = uhrmc.customer_email WHERE uhrmc.RMC_ID = '$rmb_tk'");
            $remember = mysqli_fetch_assoc($rememberQuery);
            return $remember ?? false;
        }
    }
?>
