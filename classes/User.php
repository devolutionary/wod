<?php

class User {
    public static function encrypt($password) {
        $_seed = Functions::generateRandomString();
        $_hash = hash("sha256", $password.$_seed, false);
        return $_hash.":".$_seed;
    }
} 