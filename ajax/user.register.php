<?php

include '../conf.php';

if (!isset($_POST['username']) || !isset($_POST['password']) || !filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
    print_r(json_encode(array('success' => false, 'error' => 'INCORRECT_PARAMETERS')));
    exit;
}

$success = User::createUser($_POST['username'], $_POST['password']);

if (!$success) {
    print_r(json_encode(array("success" => false, "error" => "WRITE_ERROR", "session" => $_SESSION)));
    exit;
}

print_r(json_encode(array("success" => true, "session" => $_SESSION)));