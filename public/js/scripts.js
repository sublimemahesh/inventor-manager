
$(document).ready(function() {

    setTimeout(function() {
        $("#message-bar-php").fadeOut("slow", function() {
            $('#message-bar').empty();
        });
    }, 3000);

    $("#log-out-user").click(function() {

        //////////////////////// loading-bar
        showLoadingBar();

        setTimeout(function() {
            ////////////////
            logOutUSer();
            ///////////////
            hideLoadingBar();
        }, 1500);

        //////////////////////// loading-bar

    });

});

function showLoadingBar() {
    var $modal = $('.js-loading-bar'), $bar = $modal.find('.progress-bar');
    $modal.modal('show');
    $bar.addClass('animate');
}

function hideLoadingBar() {
    var $modal = $('.js-loading-bar'), $bar = $modal.find('.progress-bar');
    $bar.removeClass('animate');
    $modal.modal('hide');
}

function logOutUSer() {

    var data = {
        "logOutUser": true
    };

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "applications/ajax/user/log-out-user.php",
        data: data,
        success: function(data) {
            if (data.status == "log-out") {

                window.location.replace("?view=login");

            }
        }

    });
}

// Date Picker JavaScript//
$(function() {
    $('.popupDatepicker').datepick();
});