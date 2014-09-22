<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('__INC__', 'includes/');
define('__USER__', 'user/');
define('__CLASSES__', 'classes/');

foreach (glob(__CLASSES__.'*.class.php') as $file)
    include $file;

Session::start();
