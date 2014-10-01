<?php

$static = true;

class db
{

    private static $conn = false;
    private static $result = false;

    public static function connect($mode)
    {

        switch ($mode) {
            case 'static':
                $dbname = conf::$DBNAME_STATIC;
                break;
            default:
                $dbname = conf::$DBNAME_MAIN;
                break;
        }

        self::$conn = new PDO("mysql:host=".conf::$DBHOST_MAIN.";dbname=".$dbname.";", conf::$DBUSER_MAIN, conf::$DBPASS_MAIN );
        self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$result = false;
    }

    public static function query($mode, $sql, $params = false)
    {
        self::connect($mode);

        self::$result = self::$conn->prepare($sql);

        try {
            if ($params)
                self::$result->execute($params);
            else
                self::$result->execute();
        } catch (PDOException $e) {
            //echo '<pre>'.$e->getMessage()."\n".$e;
            //print_r($params);
            //echo '</pre>';
        }

        return self::$result->rowCount();

    }

    public static function getArray($single = false)
    {
        $return = array();
        try {
            while ($r = self::$result->fetch())
                $return[] = $r;

            if ($single)
            {
                if (self::$result->rowCount() == 0)
                    return false;

                $return = $return[0];
            }

            return $return;
        }
        catch (PDOException $e)
        {
            return false;
        }
    }

    public static function getLastID()
    {
        if (self::$result)
            return self::$conn->lastInsertId();
        return false;
    }
}


?>