<?php
    class BillProductInfo {
        public $name;
        public $size;
        public $quantity;
        public function __construct($pName, $pS, $pQ) {
            $this->name = $pName;
            $this->size = $pS;
            $this->quantity = $pQ;
        }
    }

    class ShippingAddressInfo {
        public $reciever_name;
        public $reciever_phone;
        public $city_district_town;
        public $additional_address_info;
        public function __construct($pN, $pP, $pC, $pA) {
            $this->reciever_name = $pN;
            $this->reciever_phone = $pP;
            $this->city_district_town = $pC;
            $this->additional_address_info = $pA;
        }
    }

    class Bill {
        public $id;
        public $created_at;
        public $total_price;
        public $shipping_fee;
        public $credit_card_number;
        public $productInfos;
        public $shippingAddressInfos;
        public function __construct($pId, $pCreatedAt, $pTotalPrice, $pShippingFee, $pCreditCardNumber) {
            $this->id = $pId;
            $this->created_at = $pCreatedAt;
            $this->total_price = $pTotalPrice;
            $this->shipping_fee = $pShippingFee;
            $this->credit_card_number = $pCreditCardNumber;
            $this->productInfos = [];
            $this->shippingAddressInfos = null;
        }
    }
?>