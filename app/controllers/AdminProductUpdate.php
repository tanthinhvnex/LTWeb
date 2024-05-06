<?php
    require_once __DIR__ . '/../models/AdminModel.php';
    require_once __DIR__ . '/../Validator.php';
    class AdminProductUpdate {
        public function invoke() {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $desc = $_POST['description'];
            $quantity = $_POST['quantity'];
            $discount = $_POST['discount'];
            $size = $_POST['size'];
            $image = [];
            if (strlen($_POST['image']) > 0) {
                $image = explode(",",$_POST['image']);
            }
            $similar = [];
            if (strlen($_POST['similar']) > 0) {
                $similar = explode(",",$_POST['similar']);
            }
            
            for ($i = 0; $i < count($image); $i++) {
                if (!InputValidator::isValidURL($image[$i])) {
                    header("Content-Type: application/json");
                    http_response_code(400);
                    echo json_encode("Invalid input");
                    exit();
                }
            }
            
            if(!InputValidator::isValidArrayPattern($_POST['similar'])) {
                header("Content-Type: application/json");
                http_response_code(400);
                echo json_encode("Invalid input");
                exit();
            }
            
            if (is_numeric($price) && is_numeric($quantity) && is_numeric($discount)) {
                $model = new AdminModel();

                $update = $model->updateProduct($id,$name,$price,$desc,$size,$quantity,$discount);

                $update = $model->updateSimilarProduct($id,$similar);
                
                $update = $model->updateProductImageSrc($id,$image);
            }
            else {
                header("Content-Type: application/json");
                http_response_code(400);
                echo json_encode("Invalid input");
            }
            exit();
        }
    }
    (new AdminProductUpdate())->invoke();
?>