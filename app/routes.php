<?php
    return [
        //nếu có sử dụng phương thức nào khác ngoài GET và POST thì mọi người thêm vào ở đây
        //lưu ý format url_key không chứa '/' ở cuối, ví dụ: /BTL_LTW/LTWeb/sign_in và cũng không chứa phần mở rộng .php
        'GET' => [
            '/BTL_LTW/LTWeb' => __DIR__ . '/controllers/Home.php',
            '/BTL_LTW/LTWeb/checkout' => __DIR__ . '/controllers/Checkout.php',
            '/BTL_LTW/LTWeb/detail' => __DIR__ . '/controllers/Detail.php',
            '/BTL_LTW/LTWeb/favourite' => __DIR__ . '/controllers/Favourite.php',
            '/BTL_LTW/LTWeb/payment' => __DIR__ . '/controllers/Payment.php',
            '/BTL_LTW/LTWeb/profile' => __DIR__ . '/controllers/Profile.php',
            '/BTL_LTW/LTWeb/profile/add_new_card' => __DIR__ . '/controllers/AddNewCard.php',
            '/BTL_LTW/LTWeb/profile/edit_personal_info' => __DIR__ . '/controllers/EditPersonalInfo.php',
            '/BTL_LTW/LTWeb/reset_password' => __DIR__ . '/controllers/ResetPassword.php',
            '/BTL_LTW/LTWeb/reset_password/new_password' => __DIR__ . '/controllers/NewPassword.php',
            '/BTL_LTW/LTWeb/shipping' => __DIR__ . '/controllers/Shipping.php',
            '/BTL_LTW/LTWeb/sign_in' => __DIR__ . '/controllers/SignIn.php',
            '/BTL_LTW/LTWeb/sign_up' => __DIR__ . '/controllers/SignUp.php',
        ],
        'POST' => [
            '/BTL_LTW/LTWeb/profile/add_new_card' => __DIR__ . '/controllers/AddNewCart.php',
            '/BTL_LTW/LTWeb/profile/edit_personal_info' => __DIR__ . '/controllers/EditPersonalInfo.php',
            '/BTL_LTW/LTWeb/profile/signout' => __DIR__ . '/controllers/Profile.php',
            '/BTL_LTW/LTWeb/reset_password' => __DIR__ . '/controllers/ResetPasswordEmailed.php',
            '/BTL_LTW/LTWeb/reset_password/new_password' => __DIR__ . '/controllers/NewPassword.php',
            '/BTL_LTW/LTWeb/shipping/add_new_address' => __DIR__ . '/controllers/Shipping.php',
            '/BTL_LTW/LTWeb/shipping/edit_address' => __DIR__ . '/controllers/Shipping.php',
            '/BTL_LTW/LTWeb/sign_in' => __DIR__ . '/controllers/SignIn.php',
            '/BTL_LTW/LTWeb/sign_up' => __DIR__ . '/controllers/SignUp.php',
        ]
    ];
?>