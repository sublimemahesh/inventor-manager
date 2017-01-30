<?php

class UrlConroller {

    public function setTemplate($view) {

        $filename = 'applications/view/' . $view . '.php';
        if (file_exists($filename)) {
            include $filename;
        } else {
            echo "<h1>404</h1>";
        }
    }

    public function filterUrl() {


        $this->chackPermissions($_GET['view']);

        if (!isset($_GET['view'])) {
            header('location: ?view=dashboard');
        } else {

            if ($_GET['view'] == 'menu') {
                header('location: ?view=dashboard');
            }
        }
    }

    public function chackPermissions($view) {
        $url = str_replace("-", "_", $view);
        if (isset($_SESSION['permissionsNameArray'])) {
            if (!in_array($url, $_SESSION['permissionsNameArray'])) {
                header('location: ?view=404');
            }
        }
    }

}
