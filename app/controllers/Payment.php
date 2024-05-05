<?php
        require_once __DIR__ . '/../models/PaymentModel.php';

    class Payment {
        public function invoke() {
            $id = null;
            if (isset($_GET['id'])) {
                $id = $_GET['id'];  
                $payment = new PaymentModel();
                $info = $payment->getBillInfo($id);
            } else {
                $info = null;
                $error = "No ID provided. Please provide a valid ID.";
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $cardNumber = $_POST['card-number'] ?? '';
                $email = $_POST['email'] ?? '';  
                $shippingCost = $_POST['shippingCost'];
                $id = null;
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                $payment = new PaymentModel();
                $payment->updateBill($cardNumber, $email, $shippingCost, $id, $_SESSION['user']->email);
            }
            require_once __DIR__ . '/../views/payment.php';
        }
    }
    (new Payment())->invoke();
?>