<?php 
$user = new UserController();

$result = $user->showUserById($_GET['id']);
if (!$result) {

    echo 'error';
} else {
    ?> 
    <script type="text/javascript" src="public/js/ajax/user/edit-user.js"></script> 

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
                                <input type="hidden" id="txtId" name="txtId" value="<?php echo $result['id']; ?>">
                                <input type="text" class="form-control" name="txtName" id="txtName" value="<?php echo $result['name']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $result['email']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtBirthDay" class="col-sm-3 control-label">Birthday</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="txtBirthDay" id="txtBirthDay" value="<?php echo $result['birthday']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtNic" class="col-sm-3 control-label">NIC No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="txtNic" id="txtNic" value="<?php echo $result['nic']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="txtUseName" class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="txtUseName" id="txtUseName" value="<?php echo $result['userName']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="txtPassword" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword" value="<?php echo $result['passwod']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="txtConfirmPassword" class="col-sm-3 control-label">Confirm password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="txtConfirmPassword" id="txtConfirmPassword" value="<?php echo $result['passwod']; ?>"  required="TRUE" autocomplete="off">
                            </div>
                        </div> 

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <?php
                                        $checked = "";
                                        if ($result['isActive']) {
                                            $checked = "checked";
                                        }
                                        ?>
                                        <input type="checkbox" name="isActive" id="isActive" value="1"  <?php echo $checked; ?> > 
                                        <b>Active</b>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Permissions</label>
                            <div class="col-sm-9"> 
                                <div class="panel panel-default"  id="permission-panel">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php $user->showPermissionList($result['permissions']); ?> 
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9"> 
                                <input type="submit" class="btn btn-default" id="btn-submit" value="Save User">
                                <a href="" class="btn btn-default" id="btn-submit" >Reset</a>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div> 

<?php } ?>