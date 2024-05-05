<?php
    class User {
        public $email;
        public $fullname;
        public $role;
        public $phone;
        public $remember_me_cookie;
        // public $credit_card;

        public function __construct($pEmail, $pFullname, $pRole, $pPhone, $pRemember_me_cookie = '') {
            $this->email = $pEmail;
            $this->fullname = $pFullname;
            $this->role = $pRole;
            $this->phone = $pPhone;
            $this->remember_me_cookie = $pRemember_me_cookie;
            // $this->credit_card = $credit_card;
        }
    }
    
?>