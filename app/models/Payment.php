<?php
    class PaymentInfo {
        public $numberItem;

        public $priceAllItem;

        public $receiverName;

        public $city_district_town;

        public $additional_address_info;

        public function __construct($numberItem, $priceAllItem, $reciverName, $city_district_town, $additional_address_info) {
            $this->numberItem = $numberItem;
            $this->priceAllItem = $priceAllItem;
            $this->receiverName = $reciverName;
            $this->city_district_town = $city_district_town;
            $this->additional_address_info = $additional_address_info;
        }
    }
?>