<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminGetUser {
        public function invoke() {
            $model = new AdminModel();
            $allUsers = $model->getAllUsersDetail();

            header("Content-Type: application/json");
            echo json_encode($allUsers);
            exit();
        }
    }
    (new AdminGetUser())->invoke();
?>