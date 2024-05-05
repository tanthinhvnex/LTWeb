<?php
    class InputValidator {
        public static function isValidLength($value, $min = 1, $max = INF) {
            return strlen($value) >= $min && strlen($value) <= $max;
        }
        
        public static function isValidEmail($value) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
        
        public static function isValidURL($url) {
            return filter_var($url, FILTER_VALIDATE_URL);
        }
        
        public static function isMatchingPassword($passoword, $confirm) {
            return $passoword == $confirm;
        }

        public static function isValidArrayPattern($value) {
            // Check if the value matches the pattern of comma-separated values
            return preg_match('/^(\d+,)*\d*$/', $value) || $value === '';
        }        
    }
?>