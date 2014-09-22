<?php

if (!isset($_POST['username']) && !isset($_POST['enc'])) {
    print_r(json_encode(array('success' => false, 'error' => 'MISSING_VARIABLES')));
    exit;
}



