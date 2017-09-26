<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['appointments/view/(:any)'] = 'appointments/view/$1'; // $1 represents anything
$route['account/account_details/(:any)'] = 'account/account_details/$1'; // $1 represents anything
$route['(:any)'] = 'pages/view/$1'; // $1 represents anything