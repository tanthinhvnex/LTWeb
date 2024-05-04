<?php
    require_once __DIR__ . '/Product.php';
    class CartProduct extends Product {
        public $size;
        public $quantity;
        public function __construct($pId, $pName, $pPrice, $pDesc, $pImg, $pRate, $pSize, $pQuantity) {
            $this->id = $pId;
            $this->name = $pName;
            $this->price = $pPrice;
            $this->desc = $pDesc;
            $this->img = $pImg;
            $this->rating = $pRate;
            $this->size = $pSize;
            $this->quantity = $pQuantity;
        }
    }
?>