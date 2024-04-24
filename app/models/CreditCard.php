
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
    }
?>
