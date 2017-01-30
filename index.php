<?php

include dirname(__FILE__) . '/include.php';
 

$login = new LoginController();
$url = new UrlConroller();
$message = new MessageController();

$login->authenticateUser();
$url->filterUrl();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Stock management system</title> 

        <script src="public/js/jquery/jquery.min.js"></script> 
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="public/css/bootstrap/bootstrap.min.css"> 
        <!-- Optional theme -->
        <link rel="stylesheet" href="public/css/bootstrap/bootstrap-theme.min.css"> 
        <link rel="stylesheet" href="public/css/styles.css"> 
        <!-- Latest compiled and minified JavaScript -->
        <script src="public/js/bootstrap/bootstrap.min.js"></script>

        <!-- Date Picker JavaScript -->
        <script src="public/js/date-picker/plugin.js"></script>
        <script src="public/js/date-picker/datepic.js"></script>
        <!-- Date Picker css -->
        <link rel="stylesheet" href="public/css/date-picker/styles.css"> 
         
        <script src="public/js/scripts.js"></script>


    </head>

    <body data-twttr-rendered="true" class>

        <div class="container-fluid"> 
            <?php
            if ($_GET['view'] !== 'login') {

                include 'applications/view/menu.php';
            }
            ?> 
            <div style="min-height: 77%" >
                <div id="message-bar"></div>
                <div id="message-bar-php">

                    <?php
                    if (isset($_GET['message'])) {
                        $message->showMessages($_GET['message']);
                    }
                    ?>

                </div>  

                <?php
                $url->setTemplate($_GET['view']);
                ?>

            </div>
 
            <?php if ($_GET['view'] !== 'login') { ?>
                <footer class="navbar navbar-default"> 
                    <div class="row"> 
                        <div class="col-sm-12"></div>
                    </div> 
                </footer>
            <?php } ?>
        </div>

        <?php include 'extra-html.php'; ?>
    </body>
</html>

