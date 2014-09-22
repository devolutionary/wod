<?php

class Session
{
    public static function regenerate()
    {
        session_regenerate_id();
        $_SESSION['_fp'] = self::generateFingerprint();
    }

    public static function start()
    {
        if (session_id() == '' )
            session_start();

        if (preg_match('/cms/', $_SERVER['REQUEST_URI']))
        {
            if (isset($_SESSION['cms']['timeout']) && $_SESSION['cms']['timeout'] + 30 * 60 < time())
                self::destroy();
            $_SESSION['cms']['timeout'] = time();
        }

        self::checkFingerprint();
    }

    private static function checkFingerprint()
    {
        if (!isset($_SESSION['_fp']) || $_SESSION['_fp'] != self::generateFingerprint($_SESSION['salt']))
        {
            self::destroy();
        }

        self::regenerate();
    }

    private static function generateFingerprint($salt = false)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $agent = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT']: rand(1,10000);

        if (!$salt)
        {
            $salt = substr(hash('sha256', uniqid("", true)), 0, 16);
            $_SESSION['salt'] = $salt;
        }

        return substr(trim(hash('sha256', $ip.$agent.$salt)), 0, 32);
    }

    public static function destroy()
    {
        unset($_SESSION);
        session_destroy();
        session_start();
    }
}

?>