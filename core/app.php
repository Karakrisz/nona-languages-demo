<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');

route('/timetable', 'timetableController');
route('/recording-dates', 'recordingDatesController');
route('/mondaySubmit', 'mondaySumbitController', "POST");
route('/Monday(?<id>[\d]+)', 'singleMondayController');

route('/teachers', 'teachersController');
route('/teachers/nona', 'nonaSessionController', "POST");
route('/teachers/random', 'randomSessionController', "POST");

route('/admin-login', 'adminLoginController');
route('/admin-login-submit', 'adminLoginSubmitController', "POST");
route('/admin-registration', 'adminUserRegistrationController', "POST");

route('/quickreg', 'UserRegistrationController', "POST");
route('/login', 'LoginSubmitController', "POST");

route('/logout', 'LogoutSubmitController');
route('/admin-logout', 'adminLogoutSubmitController');


list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);

$user = createUser();
$adminUsers = adminCreateUser();

ob_clean();
require_once "tamplates/layout.php";