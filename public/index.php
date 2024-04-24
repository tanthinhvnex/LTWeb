<?php
    /* 4 dòng 7-12 có thể giúp bạn nhận được các thông tin của trang bạn đang truy cập như:
    - $_SERVER['REQUEST_METHOD']: Phương thức request HTTP, như GET hoặc POST.
    - $_SERVER['REQUEST_URI']: URI mà trang này được gọi.
    - Và nhiều thông khác, v.v.
    Chỉ cần uncomment 4 dòng sau đây và refresh lại trang*/
    // echo '<pre>';
    //     var_dump($_SERVER);
    // echo '</pre>';
    // die();
    require_once '../app/models/User.php';
    session_start();
    
    require_once '../app/models/Database.php';
    $dbConfig = require_once '../config/dbConfig.php';

    //kết nối cơ sở dữ liệu
    $connection = (new Database($dbConfig))->connection;

    //bắt đầu route
    require_once '../app/router.php';

    //đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
?>