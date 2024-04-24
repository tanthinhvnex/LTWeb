<?php
    class Address {
        public $customerEmail;
        public $AID;
        public $receiverName;
        public $receiverPhone;
        public $cityDistrictTown;
        public $additionalAddressInfo;
        public $isDefault;

        public function __construct($customerEmail, $AID, $receiverName, $receiverPhone, $cityDistrictTown, $additionalAddressInfo, $isDefault) {
            $this->customerEmail = $customerEmail;
            $this->AID = $AID;
            $this->receiverName = $receiverName;
            $this->receiverPhone = $receiverPhone;
            $this->cityDistrictTown = $cityDistrictTown;
            $this->additionalAddressInfo = $additionalAddressInfo;
            $this->isDefault = $isDefault;
        }
    }
?>