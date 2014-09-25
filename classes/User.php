<?php

class User {
    public static function encrypt($password) {
        $_seed = Functions::generateRandomString();
        $_hash = hash("sha256", $password.$_seed, false);
        return $_hash.":".$_seed;
    }

    public static function createUser($login, $password) {
        $_users = __USER__.'users';
        $users = file_get_contents($_users);
        $pattern = "/^".$login.":.*$/m";

        if (preg_match_all($pattern, $users, $matches))
            return false;

        $_file = hash("sha256", Functions::generateRandomString(), false).hash("sha256", Functions::generateRandomString(), false);

        $_enc = self::encrypt($password);
        $fh = fopen($_users, "a+");
        $createUserSuccess = fwrite($fh, $login.":".$_file."\n");
        fclose($fh);

        if (!$createUserSuccess) return false;

        $fh = fopen(__USER__.$_file, "a");
        $createUserFileSuccess = fwrite($fh, $_enc);
        fclose($fh);

        return $createUserFileSuccess;
    }

    public static function loginUser($login, $password) {

    }
} 