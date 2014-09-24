<?php

class Functions {
    public static function generateRandomString($length = 32, $mode = "alphanumeric") {
        $str = "";
        switch ($mode) {
            case "alpha":
                $chars = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ";
                break;
            case "numeric":
                $chars = "0123456789";
                break;
            case "alphanumeric":
            default:
                $chars = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789";
        }

        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $str;
    }
} 