$(document).ready(function () {
    $("#Registration").submit(function (event) {
        event.preventDefault();
        var register_name = $("#register_name").val();
        var register_email = $("#register_email").val();
        var register_password = $("#register_password").val();
        var register_password_2 = $("#register_password_2").val();
        if (register_password !== register_password_2) {
            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('A jalszavak nem egyeznek meg, próbáld meg újra!');
        } else if (grecaptcha.getResponse() == "") {
            $('.inserted-alert-danger').fadeIn();
            $('#incorrect_password').text('Pipálni kell, hogy nem vagy robot!');
        } else {
            $.ajax({
                type: "POST",
                url: "/registration",
                data: "register_name=" + register_name + "&register_email=" + register_email + "&register_password=" + register_password,
                success: function () {
                    $('.inserted-alert-success').fadeIn();
                    $('#inserted').text('Köszönjük, hogy regisztráltál');
                }
            });
        }
    });
});