<?php
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Database.php';

    class LoginModel {
        public function login($email, $password) {
            global $connection;
            $loginQuery = mysqli_query($connection, "Call Login('$email', '$password')");
            $user = mysqli_fetch_assoc($loginQuery);
            if ($user) {
                return new User($user['email'], $user['fullname'], $user['role'], $user['phone']);
            }
            else {
                echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
                echo "<script>window.location.href = '/BTL_LTW/LTWeb/sign_in';</script>";
                // header("location: /BTL_LTW/LTWeb/sign_in");
                exit();
            }
        }
    }
?>
