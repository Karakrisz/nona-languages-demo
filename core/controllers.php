<?php

function homeController()
{

    return [
        "home",
        [
            "title" => "Kezdőlap",
        ],
    ];
}

function timetableController()
{

    $connection = getConnection();
    $getMonday = Monday($connection);

    return [
        "timetable",
        [
            "title" => "Órarend",
            "getMonday" => $getMonday,
        ],
    ];
}

function recordingDatesController()
{
    return [
        "recording-dates",
        [
            "title" => "Szabad időpontok rögzítése",
        ],
    ];
}

function teachersController()
{
    return [
        "teachers",
        [
            "title" => "teachers",
        ],
    ];
}

function nonaSessionController()
{
    $teachers_session = trim($_POST['event']);
    $teacher = teachersData(getConnection(), $teachers_session);
    if ($teacher != null) {
        $_SESSION["teachers"] = [
            "name" => $teacher["name"],
        ];
        return [
            "redirect:/",
            [],
        ];
    } else {
        return [
            "redirect:/teachers",
            [],
        ];
    }
}

function randomSessionController()
{
    $teachers_session = trim($_POST['event']);
    $teacher = teachersData(getConnection(), $teachers_session);
    if ($teacher != null) {
        $_SESSION["teachers"] = [
            "name" => $teacher["name"],
        ];
        return [
            "redirect:/",
            [],
        ];
    } else {
        return [
            "redirect:/teachers",
            [],
        ];
    }
}

function UserRegistrationController()
{
    $register_name = $_POST['register_name'];
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    $connection = getConnection();
    User_Registration($connection, $register_name, $register_email, $register_password);
    return [
        "redirect:/",
        [],
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
            "id" => $user["id"],
        ];
        $view = "redirect:/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/";
    }
    return [
        $view, [],
    ];
}

function LogoutSubmitController()
{
    unset($_SESSION["user"]);
    return [
        "redirect:/", []
    ];
}

function adminLogoutSubmitController()
{
    unset($_SESSION["admin_users"]);
    return [
        "redirect:/admin-login", []
    ];
}

function adminLoginController()
{
    return [
        "admin-login",
        [
            "title" => "Admin login",
        ],
    ];
}

function adminLoginSubmitController()
{
    $admin_user_password = trim($_POST['admin_user_password']);
    $admin_user_email = trim($_POST['admin_user_email']);
    $adminUser = adminLoginUser(getConnection(), $admin_user_email, $admin_user_password);
    if ($adminUser != null) {
        $_SESSION["admin_users"] = [
            "admin_user_name" => $adminUser["admin_user_name"],
            "admin_user_email" => $adminUser["admin_user_email"],
            "id" => $adminUser["id"],
        ];
        $view = "redirect:/recording-dates";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/admin-login";
    }
    return [
        $view, [],
    ];
}

function adminUserRegistrationController()
{
    $admin_user_email_reg = $_POST['admin_user_email_reg'];
    $admin_user_name_reg = $_POST['admin_user_name_reg'];
    $admin_user_password_reg = $_POST['admin_user_password_reg'];
    $connection = getConnection();
    adminUserRegistration($connection, $admin_user_email_reg, $admin_user_name_reg, $admin_user_password_reg);
    die;
    return [
        "redirect:/admin-login",
        [],
    ];
}

function mondaySumbitController()
{
    $lesson_date = $_POST['lesson_date'];
    $day = $_POST['monday_input'];
    $monday_room = $_POST['monday_room'];
    $connection = getConnection();
    mondaySubmit($connection, $lesson_date, $day, $monday_room);
    return [
        "redirect:/recording-dates",
        [],
    ];
}

function singleMondayController($params)
{
    $connection = getConnection();
    $Monday = getMondayById($connection, $params["id"]);
    return [
        "single",
        [
            "title" => $Monday["title"],
            "Monday" => $Monday,
        ],
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "The page you are looking for is not found.",
        ],
    ];
}