<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'patahouse';

//$route['login'] = 'login/logout';

//patahouse routes
$route['patahouse'] = 'patahouse/home';
$route['users'] = 'patahouse/users';
$route['landing'] = 'patahouse/landing';
$route['login'] = 'patahouse/login';

$route['auth'] = 'Authentication/auth';
$route['registration'] = 'patahouse/registration';
$route['myaccount'] = 'patahouse/myaccount';
$route['policy'] = 'patahouse/policy';
$route['feedback'] = 'patahouse/feedback';
$route['terms'] = 'patahouse/terms';
$route['advertising'] ='patahouse/adveritising';
$route['about'] ='patahouse/about';
$route['help'] = 'patahouse/help';
$route['details'] = 'patahouse/details';
$route['orders'] = 'patahouse/orders';
$route['choice'] = 'patahouse/choice';
$route['users'] = 'Adduser/user';
$route['forgotpassword'] = 'patahouse/forgotpassword';
$route['users'] = 'patahouse/users';
$route['book'] = 'patahouse/book';

//landlord routes
$route['housing'] = 'landlord/housing';
$route['home'] = 'landlord/home';
$route['booking'] = 'landlord/booking';
$route['tentants'] = 'landlord/tenants';
$route['subscription'] = 'landlord/subscription';

//flats
$route['flat1'] = 'flat/flat1';
$route['flat2'] = 'flat/flat2';
$route['flat3'] = 'flat/flat3';
$route['flat4'] = 'flat/flat4';
$route['flat5'] = 'flat/flat5';
$route['flat6'] = 'flat/flat6';
$route['flat7'] = 'flat/flat7';

//admin routes
$route['admin'] = 'admin/admin';
$route['newutilities'] = 'admin/newutilities';
$route['addaccount'] = 'admin/addaccount';
$route['addusers']  = 'admin/addusers';

//house routes
$route['houses'] = 'houses/houses';
$route['flats'] = 'houses/flats';
$route['apartment'] = 'houses/apartment';
$route['rentals'] = 'houses/rentals';
$route['addition'] = 'houses/addition';


$route['bedroom1'] = 'houses/bedroom1';
$route['bedroom2'] = 'houses/bedroom2';
$route['bedroom3'] = 'houses/bedroom3';
$route['bedroom4'] = 'houses/bedroom4';

//test
$route['au/insert'] = 'users';
$route['login_view'] = 'login_view';
$route['welcome'] = 'welcome';
$route['logout'] = 'logout';

//mabatini
$route['mabatini1'] = 'mabatini/mabatini1';
$route['mabatini2'] = 'mabatini/mabatini2';
$route['mabatini3'] = 'mabatini/mabatini3';
$route['mabatini4'] = 'mabatini/mabatini4';

//rentals
$route['rental1'] = 'rental/rental1';
$route['rental2'] = 'rental/rental2';
$route['rental3'] = 'rental/rental3';
$route['rental4'] = 'rental/rental4';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//session
//$route['login'] = 'controller/login';
//$route['logout'] = 'controller/logout';
//$route['patahouse'] = 'controller/home';
//$route['auth'] = 'controller/auth';


