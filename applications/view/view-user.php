<?php 
$user = new UserController();
?> 
<link href="public/css/table/theme.default.css" rel="stylesheet"> 
<script type="text/javascript" src="public/js/table/jquery.tablesorter.min.js"></script>

<script type="text/javascript" src="public/js/ajax/user/is-activate-user.js"></script> 

<script>
    $(document).ready(function() {
        $('#data_table').dataTable({
            "order": [[4, "desc"]]
        });
    });
</script>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Add new user</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="data_table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>      
                            <th>Birthday</th>
                            <th>NIC Number</th>
                            <th>Created date</th>
                            <th>Last Login</th>
                            <th class="text-center">Active</th>
                            <th class="text-center"><span class="glyphicon glyphicon-eye-open"></span></th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                        foreach ($user->ShowAll() as $user) {
                            ?>

                            <tr>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->email; ?></td>
                                <td><?php echo $user->birthday; ?></td>
                                <td><?php echo $user->nic; ?></td>
                                <td><?php echo $user->createdAt; ?></td>
                                <td><?php echo $user->lastLogin; ?></td>
                                <td   class="text-center">
                                    <?php
                                    $uStatus = "";
                                    $class = "";
                                    if ($user->isActive) {
                                        $uStatus = "deactivate";
                                        $class = "deactivate-user";
                                        echo '<span class="glyphicon glyphicon-ok"></span>';
                                    } else {
                                        $uStatus = "activate";
                                        $class = "activate-user";
                                        echo '<span class="glyphicon glyphicon-remove"></span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="?view=edit-user&id=<?php echo $user->id; ?>" title="Click to edit"> <span class="glyphicon glyphicon-pencil"></span> </a> 
                                    &nbsp; | &nbsp;
                                    <a  class="<?php echo $class; ?>" id="<?php echo $user->id ?>" title="Click to <?php echo $uStatus ?>"><span class="glyphicon glyphicon-off"></span> </a>
                                </td> 
                            </tr>

                            <?php
                        }
                        ?> 
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>

<!--  Delete user message box -->
<div id="deactivate-user-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to deactivate this user</p>
                <p class="text-warning"><small>If you deactivate this user, He can't do anything in the system.</small></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="deactivate-user-id">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="btn-deactivate-user">Deactivate user</button>
            </div>
        </div>
    </div>
</div>



<div id="activate-user-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to activate this user</p>
                <p class="text-warning"><small>If you activate this user, He can access the system.</small></p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="activate-user-id">
                <input type="hidden" id="deactivate-user-id">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="btn-activate-user">Activate user</button>
            </div>
        </div>
    </div>
</div>
