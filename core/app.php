<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');

route('/registration', 'UserRegistrationController', "POST");
route('/login', 'LoginSubmitController', "POST");

list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);
$user = createUser();
ob_clean();
require_once "tamplates/layout.php";
