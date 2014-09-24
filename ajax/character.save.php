<?php
header('Content-Type: application/json');
if (!isset($_POST)) {
    print_r(json_encode(array('success' => false, 'error' => 'INVALID_PARAMETERS')));
    exit;
}

print_r(json_encode($_POST));

