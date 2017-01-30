$(document).ready(function() {
    $('.deactivate-user').click(function() {
        $("#deactivate-user-modal").modal('show');
        $("#deactivate-user-id").val(this.id);
    });

    $('.activate-user').click(function() {
        $("#activate-user-modal").modal('show');
        $("#activate-user-id").val(this.id);
    });

    $('#btn-deactivate-user').click(function() {

        var data = {
            "deactivateUser": true,
            "userId": $("#deactivate-user-id").val()
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "applications/ajax/user/is-activate-user.php",
            data: data,
            success: function(data) {
                if (data.status == "deactivate") {
                    window.location.replace("?view=view-user&message=4");
                } else {
                    window.location.replace("?view=error");
                }
            }

        });//ajax
    });
    
    $('#btn-activate-user').click(function() {

        var data = {
            "activateUser": true,
            "userId": $("#activate-user-id").val()
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "applications/ajax/user/is-activate-user.php",
            data: data,
            success: function(data) {
                if (data.status == "activate") {
                    window.location.replace("?view=view-user&message=5");
                } else {
                    window.location.replace("?view=error");
                }
            }

        });//ajax
    });
});