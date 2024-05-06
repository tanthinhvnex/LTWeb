<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    class AdminGetBill {
        public function invoke() {
            $model = new AdminModel();
            $allBills = $model->getAllBillsDetail();

            header("Content-Type: application/json");
            echo json_encode($allBills);
            exit();
        }
    }
    (new AdminGetBill())->invoke();
?>