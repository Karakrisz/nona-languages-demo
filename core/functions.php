<?php

function logMessage($level, $message)
{

    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);

}

function errorPage()
{

    include "tamplates/error.php";
    die();

}

$routes = [];

function route($action, $callable, $method = 'GET')
{

    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;

}

function dispatch($action, $notFound)
{

    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();

}

function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{

    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;

}

function teachersData($connection, $teachers_session)
{

    if ($statement = mysqli_prepare($connection, 'SELECT id, name FROM teachers WHERE name = ?')) {
        mysqli_stmt_bind_param($statement, "s", $teachers_session);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        return $record;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }

}

function User_Registration($connection, $register_name, $register_email, $register_password)
{

    $didNotBuy = 'didNotBuy';
    $pass_hash = password_hash($register_password, PASSWORD_BCRYPT);
    if ($statement = mysqli_prepare($connection, 'INSERT INTO users (name, email, password,status) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $register_name, $register_email, $pass_hash, $didNotBuy);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }

}

function loginUser($connection, $email, $password)
{

    if ($statement = mysqli_prepare($connection, 'SELECT id, name, password FROM users WHERE email = ?')) {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($password, $record["password"])) {
            $statement = mysqli_prepare($connection, 'UPDATE users SET last_login = ? WHERE email = ?');
            mysqli_stmt_bind_param($statement, 'ss', date("Y.m.d H:i:s"), $email);
            mysqli_stmt_execute($statement);
            return $record;
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }

}

function createUser()
{

    $loggedIn = array_key_exists("user", $_SESSION);
    return [
        "loggedIn" => $loggedIn,
        "name" => $loggedIn ? $_SESSION["user"]["name"] : null,
        "id" => $loggedIn ? $_SESSION["user"]["id"] : null,
    ];

}

function adminUserRegistration($connection, $admin_user_email_reg, $admin_user_name_reg, $admin_user_password_reg)
{

    $pass_hash = password_hash($admin_user_password_reg, PASSWORD_BCRYPT);
    if ($statement = mysqli_prepare($connection, 'INSERT INTO admin_users (admin_user_email, admin_user_name, admin_user_password) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $admin_user_email_reg, $admin_user_name_reg, $pass_hash);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }

}

// ha valami hiba van, ez segít $success = mysqli_stmt_execute($statement);
// var_dump(mysqli_error($connection));

function adminLoginUser($connection, $admin_user_email, $admin_user_password)
{

    if ($statement = mysqli_prepare($connection, 'SELECT id, admin_user_email, admin_user_name, admin_user_password FROM admin_users WHERE admin_user_email = ?')) {
        mysqli_stmt_bind_param($statement, "s", $admin_user_email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($admin_user_password, $record["admin_user_password"])) {
            return $record;
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }

}

function adminCreateUser()
{

    $adminLoggedIn = array_key_exists("admin_users", $_SESSION);
    return [
        "adminLoggedIn" => $adminLoggedIn,
        "admin_user_name" => $adminLoggedIn ? $_SESSION["admin_users"]["admin_user_name"] : null,
        "admin_user_email" => $adminLoggedIn ? $_SESSION["admin_users"]["admin_user_email"] : null,
        "id" => $adminLoggedIn ? $_SESSION["admin_users"]["id"] : null,
    ];

}

function mondaySubmit($connection, $lesson_date, $day, $monday_room)
{

    $teacher_name = $_SESSION["admin_users"]["admin_user_name"];
    $teacher_email = $_SESSION["admin_users"]["admin_user_email"];

    if ($statement = mysqli_prepare($connection, 'INSERT INTO Monday (teacher,lesson_date,email,day,room) VALUES (?,?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sssss', $teacher_name, $lesson_date, $teacher_email, $day, $monday_room);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }

}

function Monday($connection)
{

    if ($statement = mysqli_prepare($connection, 'SELECT * from Monday')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }

}

function getMondayById($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * FROM Monday WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

define('EMAIL', 'nona@nonalanguages.com');
define('PASS', 'Hacker13prog');

$mondayPostEvent = filter_input(INPUT_POST, "monday_mail_event", FILTER_SANITIZE_SPECIAL_CHARS);
$monday_sendemail = filter_input(INPUT_POST, "monday_sendemail", FILTER_SANITIZE_SPECIAL_CHARS);

$single_teacher_email = filter_input(INPUT_POST, "single_teacher_email", FILTER_SANITIZE_SPECIAL_CHARS);
$single_monday_day = filter_input(INPUT_POST, "single_monday_day", FILTER_SANITIZE_SPECIAL_CHARS);
$single_monday_room = filter_input(INPUT_POST, "single_monday_room", FILTER_SANITIZE_SPECIAL_CHARS);
$single_monday_date = filter_input(INPUT_POST, "single_monday_date", FILTER_SANITIZE_SPECIAL_CHARS);

if ($mondayPostEvent == 'monday_sendemail') {
    $student = $_SESSION["user"]["name"];

    require_once 'vendor/autoload.php';
    // Create the Transport
    $transport = (new Swift_SmtpTransport('s20.tarhely.com', 587, 'tls'))
        ->setUsername(EMAIL)
        ->setPassword(PASS);

    // Create the Mailer using your created Transport
    $monday_mailer = new Swift_Mailer($transport);
    $confirmation_email = new Swift_Mailer($transport);

    // Create a message
    $monday_mailer_message = (new Swift_Message('Időpont foglalása'))
        ->setFrom([EMAIL => "$student"])
        // ->setCc('rrd@webmania.cc') copy
        ->setTo([$single_teacher_email])
        ->setBody(
            'Új időpont foglalás érkezett

Diák neve: ' . "$student" . '
Diák foglalás napja: ' . "$single_monday_day" . '
Időpont: ' . "$single_monday_date" . '
Terem: ' . "$single_monday_room" . '
'
        );

    // $confirmation_email_message = (new Swift_Message('Ételellátó rendelés'))
    //     ->setFrom([EMAIL => $name])
    //     ->setTo([$email])
    //     ->setBody(
    //         ' Köszönjük megrendelését, kívánt ételeit máris készítjük!

    //         Az Ön megrendelt tételei:

    //         ' . "$soup_one " . "db " . $soup_one_name . '
    //         ' . "$soup_two " . "db " . $soup_two_name . '
    //         ' . "$course_one " . "db " . $course_one_name . '
    //         ' . "$course_two " . "db " . $course_two_name . '
    //         ' . "$dessert " . "db " . $dessert_name . '

    //         Az Ön rendelési napja: ' . $day . '

    //         Üdvözlettel: Ételellátó csapata!
    //         '
    //     );

    $monday_mailer->send($monday_mailer_message);
    //$confirmation_email->send($confirmation_email_message);

    // if ($mailer->send($message) and $confirmation_email->send($confirmation_email_message)) {
    //     die;
    // } else {
    //     echo "Az email nem szerver hiba miatt, nem ";
    // }
    header("Location: /timetable");
}