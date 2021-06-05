<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login/login_user';
////.........Registration............////
$route['registration'] = 'Login/registration';
$route['check-form'] = 'Login/check_form';


////.........Login............////
$route['login'] = 'Login/login_user';
$route['check-login'] = 'Login/check_login';

////.........Dashboard............////
$route['dashboard'] = 'Admin/dashboard';

////.........Upload CSV............////
$route['check-csv'] = 'Admin/check_csv';



////.........Logout............////
$route['logout'] = 'Admin/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
