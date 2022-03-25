$(document).ready(function() {

    $("#Registration").submit(function(event) {

        event.preventDefault();

        var register_name = $("#register_name").val();
        var register_email = $("#register_email").val();
        var register_password = $("#register_password").val();
        var register_password_2 = $("#register_password_2").val();
        var request_id = $("#request_id").val();

        if (register_password !== register_password_2) {

            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');

        } else if (request_id != "") {

            $('#request').text('!');

        } else {

            $.ajax({
                type: "POST",
                url: "/quickreg",
                data: "register_name=" + register_name + "&register_email=" + register_email + "&register_password=" + register_password,
                success: function() {
                    $('.inserted-alert-success').fadeIn();
                    $('#inserted').text('Köszönjük, hogy regisztráltál');
                    $("#beep__active").delay(50).get(0).play();
                }
            });

        }

    });

    $("#admin-registration").submit(function(event) {

        event.preventDefault();

        var admin_user_email_reg = $("#admin_user_email_reg").val();
        var admin_user_name_reg = $("#admin_user_name_reg").val();
        var admin_user_password_reg = $("#admin_user_password_reg").val();
        var admin_user_password_confirm = $("#admin_user_password_confirm").val();

        if (admin_user_password_reg !== admin_user_password_confirm) {
            $('.inserted-alert-danger').fadeIn();
            $('#admin_incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');
        } else {
            $.ajax({
                type: "POST",
                url: "/admin-registration",
                data: "admin_user_email_reg=" + admin_user_email_reg + "&admin_user_name_reg=" + admin_user_name_reg + "&admin_user_password_reg=" + admin_user_password_reg,
                success: function() {
                    $('.inserted-alert-success').fadeIn();
                    $('#admin_inserted').text('Köszönjük, hogy regisztráltál');
                }
            });
        }

    });

    $("#mondaySubmit").submit(function(event) {

        event.preventDefault();

        var lesson_date = $("#lesson_date").val();
        var monday_room = $("#monday_room").val();
        var monday_input = $("#monday_input").val();

        $.ajax({
            type: "POST",
            url: "/mondaySubmit",
            data: "lesson_date=" + lesson_date + "&monday_room=" + monday_room + "&monday_input=" + monday_input,
            success: function() {
                $('.inserted-alert-success').fadeIn();
                $('#monday-inserted').text('Időpont rögzítve');
                $("#beep__active").delay(50).get(0).play();
                $(".recording-dates-content__btn").hide();
            }
        });

    });

    // $("#singleMondaySubmit").submit(function(event) {

    //     event.preventDefault();

    //     var monday_sendemail = $('monday_sendemail').val();
    //     var single_monday_day = $("#single_monday_day").val();
    //     var single_monday_room = $("#single_monday_room").val();

    //     $.ajax({
    //         type: "POST",
    //         url: "/Monday(?<id>[\d]+)",
    //         data: "monday_sendemail=" + monday_sendemail + "&single_monday_day=" + single_monday_day + "&single_monday_room=" + single_monday_room,
    //         success: function() {
    //             $('.inserted-alert-success').fadeIn();
    //             $('#monday-inserted').text('Időpont rögzítve');
    //             $("#beep__active").delay(50).get(0).play();
    //             $(".recording-dates-content__btn").hide();
    //         }
    //     });

    // });

});