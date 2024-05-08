<?php
    require_once __DIR__ . '/../models/ProfileModel.php';
    require_once __DIR__ . '/../models/CreditCard.php';
    class AddNewCard {
        public function invoke() {
            $_SESSION['errorMessage'] = null;
            $profile = new ProfileModel();
            $user = $profile->getUserByEmail($_SESSION['user']->email);
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $requestUri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
                $parsedUrl = parse_url($requestUri);
                $path = trim($parsedUrl['path'], '/');
                $segments = explode('/', $path);
                $endpoint = end($segments);
                
                if ($endpoint === 'add_new_card') {
                    $this->addNewCard();
                }else {
                    echo "Unknown endpoint";
                    exit; 
                }
            }
            require_once __DIR__ . '/../views/add-new-card.php';
        }
        private function addNewCard(){
            $fullname = $_POST['last-name'];
            $cvv = $_POST['card-cvv'];
            $cardNumber = $_POST['card-number'];
            $expirationDate = $this->convertToDateFormat($_POST['expiration-date']);


            $isDefault = isset($_POST['isDefault']) ? 1 : 0;
            $creditCard = new CreditCard($cardNumber, $cvv, $expirationDate, $fullname, $isDefault);
            $creditCard->addNewCard();
            
        }
        private function convertToDateFormat($expDate) {
            $expDateParts = explode('/', $expDate);
            $month = $expDateParts[0];
            $year = $expDateParts[1];
    
            return date('Y-m-d', strtotime('01-' . $month . '-20' . $year));
        }
    }
    (new AddNewCard())->invoke();
    
?>