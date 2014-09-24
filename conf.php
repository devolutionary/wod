<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$_ROOT = preg_match("/ajax/", $_SERVER['PHP_SELF'])? "../": "./";

define('__INC__', $_ROOT.'includes/');
define('__USER__', $_ROOT.'user/');
define('__CLASSES__', $_ROOT.'classes/');

foreach (glob(__CLASSES__.'*.php') as $file) {
    include $file;
}

Session::start();
