<?php
    return [
        //nếu có sử dụng phương thức nào khác ngoài GET và POST thì mọi người thêm vào ở đây
        //lưu ý format url_key không chứa '/' ở cuối, ví dụ: /BTL_LTW/LTWeb/sign_in và cũng không chứa phần mở rộng .php
        //url_key sẽ ánh xạ đến controller và middleware xử lý request đó
        'GET' => [
            '/BTL_LTW/LTWeb' => ['controller' => __DIR__ . '/controllers/Home.php', 'middleware' => []],
            '/BTL_LTW/LTWeb/admin' => ['controller' => __DIR__ . '/controllers/Admin.php', 'middleware' => ['auth','admin']],
            '/BTL_LTW/LTWeb/admin/products' => ['controller' => __DIR__ . '/controllers/AdminProduct.php', 'middleware' => ['auth','admin']],
            '/BTL_LTW/LTWeb/checkout' => ['controller' => __DIR__ . '/controllers/Checkout.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/detail' => ['controller' => __DIR__ . '/controllers/Detail.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/favourite' => ['controller' => __DIR__ . '/controllers/Favourite.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/header' => ['controller' => __DIR__ . '/controllers/LoginHeader.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/payment' => ['controller' => __DIR__ . '/controllers/Payment.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile' => ['controller' => __DIR__ . '/controllers/Profile.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile/add_new_card' => ['controller' => __DIR__ . '/controllers/AddNewCard.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile/edit_personal_info' => ['controller' => __DIR__ . '/controllers/EditPersonalInfo.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/reset_password' => ['controller' => __DIR__ . '/controllers/ResetPassword.php', 'middleware' => ['guest']],
            '/BTL_LTW/LTWeb/reset_password/new_password' => ['controller' => __DIR__ . '/controllers/NewPassword.php', 'middleware' => ['email-confirmed']], // này dùng cho reset_password
            '/BTL_LTW/LTWeb/shipping' => ['controller' => __DIR__ . '/controllers/Shipping.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/sign_in' => ['controller' => __DIR__ . '/controllers/SignIn.php', 'middleware' => ['guest']],
            '/BTL_LTW/LTWeb/sign_up' => ['controller' => __DIR__ . '/controllers/SignUp.php', 'middleware' => ['guest']],
        ],
        'POST' => [
            '/BTL_LTW/LTWeb/admin' => ['controller' => __DIR__ . '/controllers/Admin.php', 'middleware' => ['auth','admin']],
            '/BTL_LTW/LTWeb/logout' => ['controller' => __DIR__ . '/controllers/Logout.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile/add_new_card' => ['controller' => __DIR__ . '/controllers/AddNewCart.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile/edit_personal_info' => ['controller' => __DIR__ . '/controllers/EditPersonalInfo.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/favourite' => ['controller' => __DIR__ . '/controllers/Favourite.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/profile/signout' => ['controller' => __DIR__ . '/controllers/Profile.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/reset_password' => ['controller' => __DIR__ . '/controllers/ResetPasswordEmailed.php', 'middleware' => ['guest']],
            '/BTL_LTW/LTWeb/reset_password/new_password' => ['controller' => __DIR__ . '/controllers/NewPassword.php', 'middleware' => ['email-confirmed']],
            '/BTL_LTW/LTWeb/shipping/add_new_address' => ['controller' => __DIR__ . '/controllers/Shipping.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/shipping/edit_address' => ['controller' => __DIR__ . '/controllers/Shipping.php', 'middleware' => ['auth']],
            '/BTL_LTW/LTWeb/sign_in' => ['controller' => __DIR__ . '/controllers/SignIn.php', 'middleware' => ['guest','trim-signin-input']],
            '/BTL_LTW/LTWeb/sign_up' => ['controller' => __DIR__ . '/controllers/SignUp.php', 'middleware' => ['guest','trim-signup-input']],
            '/BTL_LTW/LTWeb/payment' => ['controller' => __DIR__ . '/controllers/Payment.php', 'middleware' => []],
        ]
    ];
?>