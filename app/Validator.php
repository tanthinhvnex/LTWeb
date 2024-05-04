<?php
    class InputValidator {
        public static function isValidLength($value, $min = 1, $max = INF) {
            return strlen($value) >= $min && strlen($value) <= $max;
        }
        
        public static function isValidEmail($value) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
        
        
        public static function isMatchingPassword($passoword, $confirm) {
            return $passoword == $confirm;
        }
    }
?>