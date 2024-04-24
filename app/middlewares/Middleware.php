<?php
    require_once __DIR__ . '/Auth.php';
    require_once __DIR__ . '/Guest.php';
    require_once __DIR__ . '/EmailConfirm.php';
    require_once __DIR__ . '/TrimSignUpInput.php';
    require_once __DIR__ . '/TrimSignInInput.php';
    class Middleware {
        // mapping middleware key to specific middleware class
        const MAP = [
            'guest' => Guest::class,
            'auth' => Auth::class,
            'email-confirmed' => EmailConfirm::class, // này dùng cho reset_password
            'trim-signin-input' => TrimSignInInput::class,
            'trim-signup-input' => TrimSignUpInput::class 
        ];

        public static function drive($middlewareStack) {
            if (count($middlewareStack) > 0) {
                for ($i = 0; $i < count($middlewareStack); $i++) {
                    $middlewareClass = Middleware::MAP[$middlewareStack[$i]] ?? FALSE;
                    if (!$middlewareClass) {
                        throw new \Exception("No matching middleware stack: ". $middelwareStack[$i]);
                    }
                    (new $middlewareClass)->handle();
                }
            }
        }
    }
?>