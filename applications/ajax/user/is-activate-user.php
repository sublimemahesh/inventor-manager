<?php

include '../../controller/DatabaseController.php';
include '../../model/User.php';
include '../../controller/UserController.php';

if (isset($_POST['deactivateUser'])) {

    $user = new UserController();
    $user->deactivateUser($_POST['userId']);
}

if (isset($_POST['activateUser'])) {

    $user = new UserController();
    $user->activateUser($_POST['userId']);
}