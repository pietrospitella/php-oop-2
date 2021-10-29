<?php 

    class Product {
        public $name;
        public $price;

        public function __construct($_name,$_price)
        {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($_price){
            return $this->price = $_price;
        }

        public function getDiscountedPrice($discount){
            return $this->getPrice() - $discount;
        }
    }

?>