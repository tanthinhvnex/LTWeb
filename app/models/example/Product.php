<?php
    class Product {
        public $id;
        public $name;
        public $price;
        public $desc;
        public $img;
        public $rating;
        public function __construct($pId, $pName, $pPrice, $pDesc, $pImg, $pRate) {
            $this->id = $pId;
            $this->name = $pName;
            $this->price = $pPrice;
            $this->desc = $pDesc;
            $this->img = $pImg;
            $this->rating = $pRate;
        }
    }

    class ProductDetail {
        public $id;
        public $name;
        public $price;
        public $desc;
        public $size;
        public $quantity;
        public $img;
        public $similar;
        public $discount;
        public $rating;
        public function __construct($pId, $pName, $pPrice, $pDesc, $pSize, $pRate, $pQuantity, $pDiscount) {
            $this->id = $pId;
            $this->name = $pName;
            $this->price = $pPrice;
            $this->desc = $pDesc;
            $this->rating = $pRate;
            $this->quantity = $pQuantity;
            $this->discount = $pDiscount;
            $this->size = $pSize;
            $this->similar = [];
            $this->img = [];
        }
    }
?>