<?php
require_once __DIR__ . '/../models/ProfileModel.php';

    class ResetPasswordEmailed {
        public function invoke() {
            $_SESSION['errorMessage'] = null; 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
                $parsedUrl = parse_url($requestUri);
                $path = trim($parsedUrl['path'], '/');
                $segments = explode('/', $path);
                $endpoint = end($segments);
                
                if ($endpoint === 'reset_password') {
                    $this->handleResetPassword();
                }else {
                    echo "Unknown endpoint";
                    exit; 
                }

            }
            require_once __DIR__ . '/../views/reset-password-emailed.php';
        }

        private function handleResetPassword(){
            $email = $_POST['email'];
            $profile=new ProfileModel();
            $profile->addTokenData($email);
        }
    }
    (new ResetPasswordEmailed())->invoke();
?>