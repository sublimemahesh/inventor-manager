<?php

$login = new LoginController();

if ($login->logOut()) {
    
    $result = [
        "status" => "log_out"
    ];
    
    header('Content-Type: application/json');
    echo json_encode($result);
    exit();
}
