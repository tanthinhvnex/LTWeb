<?php
require_once __DIR__ . '/../models/ProfileModel.php';
    class NewPassword {
        public function invoke() {
            $_SESSION['errorMessage']=null;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
                $parsedUrl = parse_url($requestUri);
                $path = trim($parsedUrl['path'], '/');
                $segments = explode('/', $path);
                $endpoint = end($segments);
                
                if ($endpoint === 'new_password') {
                    $this->handleResetPassword();
                } else {
                    echo "Unknown endpoint";
                    exit; 
                }
            }
            require_once __DIR__ . '/../views/new-password.php';
            
        }
        private function handleResetPassword(){
            $newPassword=$_POST['password'];
            $token=$_POST['token'];
            $profile=new ProfileModel();
            $profile->handleResetPassword($token,$newPassword);
        }
    }
    (new NewPassword())->invoke();
?>