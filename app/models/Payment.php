<?php
    class PaymentInfo {
        public $numberItem;

        public $priceAllItem;


        public function __construct($numberItem, $priceAllItem) {
            $this->numberItem = $numberItem;
            $this->priceAllItem = $priceAllItem;
        }
    }
?>