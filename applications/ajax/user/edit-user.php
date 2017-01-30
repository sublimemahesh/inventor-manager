<?php

include '../../controller/DatabaseController.php';
include '../../model/User.php';
include '../../controller/UserController.php';

if (isset($_POST['addNewUser'])) {

    $data = [
        'txtId' => $_POST['txtId'],
        'txtName' => $_POST['txtName'],
        'txtEmail' => $_POST['txtEmail'],
        'txtBirthDay' => $_POST['txtBirthDay'],
        'txtNic' => $_POST['txtNic'],
        'txtUseName' => $_POST['txtUseName'],
        'txtPassword' => $_POST['txtPassword'],
        'txtConfirmPassword' => $_POST['txtConfirmPassword'],
        'isActive' => $_POST['isActive'],
        'permissions' => $_POST['permissions']
    ];

    $user = new UserController();

    $user->updateUser($data);
}
 
   


