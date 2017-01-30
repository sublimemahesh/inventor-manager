<link rel="stylesheet" href="public/css/bootstrap/bootstrap-submenu.min.css"/>
<link rel="stylesheet" href="public/css/bootstrap/docs.min.css"/>
<script type="text/javascript" src="public/js/bootstrap/bootstrap-submenu.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap/docs.js"></script>


<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
        <a class="navbar-brand" href="?view=dashboard">Dashboard</a>
    </div>

    <div class="collapse navbar-collapse">
        <?php echo $_SESSION['MENU']; ?>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a tabindex="0" data-toggle="dropdown">Profile<span class="caret"></span></a> 
                <ul class="dropdown-menu" role="menu">
                    <li><a ><?php echo $_SESSION['NAME']; ?></a></li>
                    <li><a tabindex="0">Account</a></li>
                    <li><a tabindex="0">Settings</a></li>
                    <li><a href="#" id="log-out-user">Logout</a></li> 
                </ul>
            </li>
        </ul>
    </div>
</nav>  




