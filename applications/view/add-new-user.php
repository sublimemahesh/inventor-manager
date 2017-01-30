<?php 
$user = new UserController();
?> 
<script type="text/javascript" src="public/js/ajax/user/add-new-user.js"></script> 

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add new user</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-9">
                <form method="post" action="" class="form-horizontal" id="main-form">
                    <div class="form-group">
                        <label for="txtName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtName" id="txtName" required="TRUE" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="txtEmail" id="txtEmail" required="TRUE" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtBirthDay" class="col-sm-3 control-label">Birthday</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="txtBirthDay" id="txtBirthDay" required="TRUE" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtNic" class="col-sm-3 control-label">NIC No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtNic" id="txtNic" required="TRUE" autocomplete="off">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="txtUseName" class="col-sm-3 control-label">User Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtUseName" id="txtUseName" required="TRUE" autocomplete="off">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="txtPassword" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="txtPassword" id="txtPassword" required="TRUE" autocomplete="off">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="txtConfirmPassword" class="col-sm-3 control-label">Confirm password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="txtConfirmPassword" id="txtConfirmPassword" required="TRUE" autocomplete="off">
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="isActive" id="isActive" value="1" > 
                                    <b>Active</b>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtConfirmPassword" class="col-sm-3 control-label">User Permissions</label> 
                        <div class="col-sm-9">  
                            <div class="panel panel-default" id="permission-panel">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <label class="text-left">
                                                    <input type="checkbox" id="selecctall"/> Select and deselect all
                                                </label>
                                            </li> 
                                        </ul> 
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php
                                        $permissions = "";
                                        $user->showPermissionList($permissions);
                                        ?> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9"> 
                            <input type="submit" class="btn btn-default" id="btn-submit" value="Save User">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div> 
