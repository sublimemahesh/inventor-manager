$(document).ready(function() {


    $('#selecctall').click(function() {
        if (this.checked) {
            $('.check-box').each(function() {
                this.checked = true;
            });
        } else {
            $('.check-box').each(function() {
                this.checked = false;
            });
        }
    });



    $('#main-form').submit(function(event) {

        event.preventDefault();

        var permissions = "";
        var isActive = 0;

        $('input:checkbox:checked.check-box').each(function() {
            permissions += $(this).val() + ",";

        });
        $('input:checkbox:checked#isActive').each(function() {
            isActive = $(this).val();

        });

        var data = {
            "addNewUser": true,
            "txtName": $('#txtName').val(),
            "txtEmail": $('#txtEmail').val(),
            "txtBirthDay": $('#txtBirthDay').val(),
            "txtNic": $('#txtNic').val(),
            "txtUseName": $('#txtUseName').val(),
            "txtPassword": $('#txtPassword').val(),
            "txtConfirmPassword": $('#txtConfirmPassword').val(),
            "isActive": isActive,
            "permissions": permissions.slice(0, -1)
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "applications/ajax/user/add-new-user.php",
            data: data,
            success: function(data) {
                getAction(data);
            }


        });//ajax
    });//btn-submit .click
});//document

function getAction(data) {

    var message = "";

    if (data.status == "add") {
        window.location.replace("?view=add-new-user&message=2");

    } else
    {
        if (data.status == "notmatch") {
            message = "Confirm password not match";
        }
        if (data.status == "duplicate") {
            message = "Username already in exist";
        }
        if (data.status == "empty") {
            message = "All field are required to save user";
        }
    }

    var html = '';

    html += '<div class="alert alert-danger alert-dismissible" role="alert">';
    html += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
    html += '<span aria-hidden="true">&times;</span>';
    html += '</button>';
    html += '<strong>';
    html += message;
    html += '</strong>';
    html += '</div>';


    $('html,body').animate({
        scrollTop: $("#message-bar").offset().top - 20},
    'slow');

    $("#message-bar").empty();
    $("#message-bar").append(html);



}