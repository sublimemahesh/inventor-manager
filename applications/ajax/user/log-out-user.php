<?php

if (isset($_POST['logOutUser'])) {
 
    include '../../controller/LoginController.php';
    $login = new LoginController();

    if ($login->logOut()) {
        $result = [
            "status" => "log-out"
        ];
        header('Content-Type: application/json');
        echo json_encode($result);
        exit();
    }
}