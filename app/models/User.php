<?php
    class User {
        public $email;
        public $fullname;
        public $role;
        public $phone;
        // public $credit_card;

        public function __construct($pEmail, $pFullname, $pRole, $pPhone) {
            $this->email = $pEmail;
            $this->fullname = $pFullname;
            $this->role = $pRole;
            $this->phone = $pPhone;
            // $this->credit_card = $credit_card;
        }
    }
    
?>