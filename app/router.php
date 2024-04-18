<?php
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];// lấy đường dẫn đến trang bạn đang truy cập
    $method = $_SERVER['REQUEST_METHOD'];//lấy method
    $routes = require_once __DIR__ . '/routes.php';//chứa thông tin routes

    //khi đường dẫn không tồn tại thì hàm abort được gọi, nó sẽ được xử lý bởi ErrorController và raise trang lỗi tương ứng, ví dụ: 404.php, 403.php,...
    function abort($code = 404) {//mặc định là trang không tồn tại
        http_response_code($code);
        require_once __DIR__ . '/controllers/ErrorController.php';
    }

    //hàm route ánh xạ request (url và method) đến controller tương ứng
    function route($url, $routes, $method) {
        if (substr($url, -1) == '/') {//nếu url chứa '/' ở cuối thì xóa '/' để cho nó match với url trong routes
            $url = substr($url, 0, -1);
        }
        
        if (isset($routes[$method]) && array_key_exists($url, $routes[$method])) {
            require_once $routes[$method][$url];
        } else {
            abort();
        }
    }

    route($url, $routes, $method);
?>
