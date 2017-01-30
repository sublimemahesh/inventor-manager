<?php

if (!isset($_SESSION)) {
    session_start();
}

class LoginController {

    public function authenticateUser() {

        if ($_GET['view'] != 'login') {

            if (isset($_SESSION['IS_LOGIN'])) {

                if (!$_SESSION['IS_LOGIN']) {
                    header('location: ?view=login');
                }
            } else {
                header('location: ?view=login');
            }
 
            date_default_timezone_set('Asia/Colombo');

            $to_time = $_SESSION['ACTIVE_TIME'];
            $from_time = strtotime(date('Y-m-d H:i:s'));
            $_SESSION['ACTIVE_TIME'] = $from_time;
            $inactiveTime = round(abs($to_time - $from_time), 2) . " seconds";

            if ($inactiveTime > 10000) {
                header('location: ?view=login');
            }
        }
    }

    public function login($userName, $password) {

        $user = new User();
        if (empty($userName) || empty($password)) {
            header('location: ?view=login&message=7');
        } else {
            $result = $user->getUserByUserNameAndPassword($userName, $password);


            if (!$result) {
                header('location: ?view=login&message=6');
            } else {
                $_SESSION['IS_LOGIN'] = TRUE;
                $_SESSION['NAME'] = $result['name'];
                $_SESSION['PERMISSIONS'] = $result['permissions'];
                $_SESSION['ACTIVE_TIME'] = strtotime(date('Y-m-d H:i:s'));

                $permission = new Permission();
                $userPermissions = $permission->getPermissionsByIds($_SESSION['PERMISSIONS']);

                array_push($userPermissions, "dashboard", "log_out", "404", "403");

                $_SESSION['permissionsNameArray'] = $userPermissions;

 
                $manu = new MenuController();
                $_SESSION['MENU'] = $manu->showMenu();


                header('location: ?view=dashboard&message=8');
            }
        }
    }

    public function logOut() {
        session_destroy();
        return TRUE;
    }

}
