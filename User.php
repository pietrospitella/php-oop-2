<?php 

    class User {

        public $name;
        public $email;

        public function __construct($_name, $_email)
        {
            $this->name = $_name;
            $this->email = $_email;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($_name)
        {
            $this->name = $_name;
        }

    }

    class UserPremium extends User {

        public $discount;

        public function __construct($_name, $_email, $_discount)
        {
            $this->name = $_name;
            $this->email = $_email;
            $this->discount = $_discount;
        }

        public function getDiscount()
        {
            return $this->discount;
        }

        public function setDiscount($discount)
        {
            $this->discount = $discount;
        }

    }

?>