<?php
require_once __DIR__ . '/../models/Address.php';

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
            } elseif ($endpoint === 'edit_address') {
                echo 'edit';
                $this->handleEditAddress();
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
            }else {
                echo "Unknown endpoint";
                exit; 
            }
        }
        $listAddress = Address::getListAddressByUser($_SESSION['user']->email);
        require_once __DIR__ . '/../views/shipping.php';
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
            echo "success add";
        } else {
            echo "Error: Name field not set in POST data.";
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
            header("http://localhost/BTL_LTW/LTWeb/profile");
        } else {
            echo "Error: Name field not set in POST data.";
        }
    }
}

(new Shipping())->invoke();
?>
