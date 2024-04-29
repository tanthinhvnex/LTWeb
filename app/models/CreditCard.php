
<?php
    class CreditCard {
        public $cardNumber;
        public $cvv;
        public $expDate;
        public $fullname;
        public $isDefault;

        public function __construct($cardNumber, $cvv, $expDate, $fullname, $isDefault) {
            $this->cardNumber = $cardNumber;
            $this->cvv = $cvv;
            $this->expDate = $expDate;
            $this->fullname = $fullname;
            $this->isDefault = $isDefault;
        }
        public function addNewCard(){
            global $connection;
            $cardNumber = mysqli_real_escape_string($connection, $this->cardNumber);
            $cvv = mysqli_real_escape_string($connection, $this->cvv);
            $expDate = mysqli_real_escape_string($connection, $this->expDate);
            $fullname = mysqli_real_escape_string($connection, $this->fullname);
            $customerEmail=$_SESSION['user']->email;
            // Check if the card number already exists
            $existingCardQuery = "SELECT COUNT(*) AS num_cards FROM credit_card WHERE card_number = '$cardNumber' and customer_email='$customerEmail'";
            $existingCardResult = mysqli_query($connection, $existingCardQuery);
            $existingCardData = mysqli_fetch_assoc($existingCardResult);
            $numExistingCards = $existingCardData['num_cards'];

            if ($numExistingCards > 0) {
                echo "Error adding card: Card number already exists";
                $_SESSION['errorMessage'] = "Error adding card: Card number already exists";
                
                return;
            }

            $sql = "INSERT INTO credit_card (card_number, cvv, exp_date, fullname, is_default, customer_email) 
                VALUES ('$cardNumber', '$cvv', '$expDate', '$fullname', '$this->isDefault', '$customerEmail')";
            if (mysqli_query($connection, $sql)) {
                echo "card added successfully";
            } else {
                $_SESSION['errorMessage'] = "Error adding card: " . mysqli_error($connection);
            }
            
        }
    }
?>
