<?php
    require_once __DIR__ . '/Admin.php';
    require_once __DIR__ . '/Auth.php';
    require_once __DIR__ . '/Guest.php';
    require_once __DIR__ . '/EmailConfirm.php';
    require_once __DIR__ . '/TrimSignUpInput.php';
    require_once __DIR__ . '/TrimSignInInput.php';
    require_once __DIR__ . '/TrimAdminAddProductInput.php';
    class Middleware {
        // mapping middleware key to specific middleware class
        const MAP = [
            'admin' => Admin::class,
            'auth' => Auth::class,
            'email-confirmed' => EmailConfirm::class, // này dùng cho reset_password
            'guest' => Guest::class,
            'trim-signin-input' => TrimSignInInput::class,
            'trim-signup-input' => TrimSignUpInput::class,
            'trim-admin-add-product-input' => TrimAdminAddProductInput::class
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