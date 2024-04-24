<?php
    class Logout {
        public function invoke() {
            $_SESSION = [];
            session_destroy();

            $params = session_get_cookie_params();
            setcookie('PHPSESSION', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

            header('location: /BTL_LTW/LTWeb/sign_in');
            exit();
        }
    }
    (new Logout())->invoke();
?>