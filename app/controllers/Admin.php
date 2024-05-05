<?php
    class AdminController {
        public function invoke() {
            if (isset($_POST['name'])) {
                var_dump($_POST);
                exit();
            }
            else {
                require_once __DIR__ . '/../views/index-admin.php';
                exit();
            }
        }
    }
    (new AdminController())->invoke();
?>