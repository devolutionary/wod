<?php

include '../conf.php';

if (!isset($_POST['username']) || !isset($_POST['password']) || !filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
    print_r(json_encode(array('success' => false, 'error' => 'INCORRECT_PARAMETERS')));
    exit;
}

$userFile = __USER__.'users';
$users = file_get_contents($userFile);
$pattern = "/^".$_POST['username'].":.*$/m";

if (preg_match_all($pattern, $users, $matches)) {
    print_r(json_encode(array('success' => false, 'error' => 'USER_EXISTS')));
}

$fh = fopen(__USER__."users", "a+");
$success = fwrite($fh, $_POST['username'].":".User::encrypt($_POST['password'])."\n");
fclose($fh);

if (!$success) {
    print_r(json_encode(array("success" => false, "error" => "WRITE_ERROR")));
    exit;
}

print_r(json_encode(array("success" => true)));
