<?php

$static = true;

class db
{

    private static $conn = false;
    private static $result = false;

    public static function connect()
    {
        self::$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";", DB_USER, DB_PASS );
        self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$result = false;
    }

    public static function query($sql, $params = false)
    {
        self::connect();

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