<?php
    class InputValidator {
        public static function isValidLength($value, $min = 1, $max = INF) {
            $value = trim($value);
            return strlen($value) >= $min && strlen($value) <= $max;
        }

        public static function isValidEmail($value) {
            return filter_var($value, FILTER_VALIDATE_EMAIL);
        }
    }
?>