<?php
    require_once __DIR__ . '/Auth.php';
    require_once __DIR__ . '/Guest.php';
    require_once __DIR__ . '/EmailConfirm.php';
    class Middleware {
        // mapping middleware key to specific middleware class
        const MAP = [
            'guest' => Guest::class,
            'auth' => Auth::class,
            'email-confirmed' => EmailConfirm::class // này dùng cho reset_password
        ];

        public static function drive($middlewareKey) {
            if ($middlewareKey) {
                $middlewareClass = Middleware::MAP[$middlewareKey] ?? FALSE;
                if (!$middlewareClass) {
                    throw new \Exception("No matching middleware class for key: '$middlewareKey'");
                }
                (new $middlewareClass)->handle();
            }
        }
    }
?>