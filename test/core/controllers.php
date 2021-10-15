<?php

function homeController()
{


    return [
        "home",
        [
            "title" => "Home"
        ]
    ];
}


function UserRegistrationController()
{
    $register_name  = $_POST['register_name'];
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    // $his_job = $_POST['his_job'];
    // $his_mobile = $_POST['his_mobile']; s
    $connection = getConnection();
    User_Registration($connection, $register_name, $register_email, $register_password);
    return [
        "redirect:/",
        []
    ];
}

function LoginSubmitController()
{
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $user = LoginUser(getConnection(), $email, $password);
    if ($user != null) {
        $_SESSION["user"] = [
            "name" => $user["name"],
            "id" => $user["id"]
        ];
        $view = "redirect:/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/";
    }
    return [
        $view, []
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "The page you are looking for is not found."
        ]
    ];
}
