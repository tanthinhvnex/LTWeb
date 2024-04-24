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
?>