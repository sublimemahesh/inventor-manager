<?php
if (isset($_POST['btnSubmitLogin'])) {

    $login = new LoginController();

    $login->login($_POST['useName'], $_POST['password']);
}
?>

<link rel="stylesheet" href="public/css/login.css">

<div class="container">  
    <form class="form-signin"  method="post" autocomplete="on">
        <h2 class="form-signin-heading">Please login..</h2>
        <label for="useName" class="sr-only">User Name</label>
        <input type="text" id="useName" name="useName" class="form-control" placeholder="  User Name" required autofocus  autocomplete="off" >
        <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="  Password" required>
         
        <button class="btn btn-lg btn-primary btn-block" type="submit"  name="btnSubmitLogin" id="btnSubmitLogin" >Login</button>
    </form>

</div><!-- /container -->
