<?php
require_once __DIR__ . '/../models/Address.php';
require_once __DIR__ . '/../models/Cart.php';
require_once __DIR__ . '/../models/Bill.php';



class Shipping {
    public function invoke() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
            $parsedUrl = parse_url($requestUri);
            $path = trim($parsedUrl['path'], '/');
            $segments = explode('/', $path);
            $endpoint = end($segments);
            
            if ($endpoint === 'add_new_address') {
                $this->handleAddAddress();
                header("location:http://localhost/BTL_LTW/LTWeb/shipping");
            } else if ($endpoint === 'edit_address') {
                $this->handleEditAddress();
            }else if ($endpoint === 'delete_from_cart') {
                $this->deleteFromCart();
            }else if ($endpoint === 'new_bill') {
                $this->makeNewBill();
            } else {
                echo "Unknown endpoint";
                exit; 
            }
        }
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
            $parsedUrl = parse_url($requestUri);
            $path = trim($parsedUrl['path'], '/');
            $segments = explode('/', $path);
            $endpoint = end($segments);
            
            if ($endpoint === 'shipping') {
                $listAddress=Address::getListAddressByUser($_SESSION['user']->email);
                require_once __DIR__ . '/../views/shipping.php';
            }else if ($endpoint === 'cart') {
                $this->handleGetCart();
            }else {
                echo "Unknown endpoint";
                exit; 
            }
        }
        
    }
    
    private function handleAddAddress() {
        if(isset($_POST['name'])) {
            $currentEmail = $_SESSION['user']->email;
            $receiverName = $_POST['name'];
            $receiverPhone = $_POST['phone'];
            $additionalAddressInfo = $_POST['address'];
            $cityDistrictTown = $_POST['city'];
            $isDefault = isset($_POST['isDefault']) ? 1 : 0;
            
            $newAddress = new Address($currentEmail, null, $receiverName, $receiverPhone, $cityDistrictTown, $additionalAddressInfo, $isDefault);
            $newAddress->addAddress();
            
        } else {
            echo "Error: server error.";
        }
    }
    private function handleEditAddress() {
        if(isset($_POST['name'])) {
            var_dump($_POST['addressToEdit']);
            $currentEmail = $_SESSION['user']->email;
            $addressToEdit = $_POST['addressToEdit'];
            
            $addressToEdit = json_decode($addressToEdit, true);
            $receiverName = $_POST['name'];
            $receiverPhone = $_POST['phone'];
            $additionalAddressInfo = $_POST['address'];
            $cityDistrictTown = $_POST['city'];
            $isDefault = isset($_POST['isDefault']) ? 1 : 0;
            $addressToEdit = new Address(
                $addressToEdit['customerEmail'],
                $addressToEdit['AID'],
                $receiverName,
                $receiverPhone,
                $cityDistrictTown,
                $additionalAddressInfo,
                $isDefault
            );
            $addressToEdit->editAddress();
            header("location:http://localhost/BTL_LTW/LTWeb/shipping");
        } else {
            echo "Error: Name field not set in POST data.";
        }
    }
    private function handleGetCart(){
        $email=$_SESSION['user']->email;
        $userCart=CartModel::getCartByUser($email);
        echo json_encode($userCart);
    }
    private function deleteFromCart(){
        $email=$_SESSION['user']->email;
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        CartModel::deleteFromCart($email,$data['PID'],$data['size']);
    }
    private function makeNewBill(){
        $email=$_SESSION['user']->email;
        $jsonData = file_get_contents('php://input');
        $data = json_decode($jsonData, true);
        
        $BID=BillModel::createBill($email,$data['AID']);
        BillModel::addProduct($BID,$data['items']);
        echo json_encode($BID);
    }
}

(new Shipping())->invoke();
?>
