<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminProductDelete {
        public function invoke() {
            $model = new AdminModel();
            $model->deleteProduct($_GET['id'],$_GET['size']);

            exit();
        }
    }
    (new AdminProductDelete())->invoke();
?>