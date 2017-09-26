<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
<<<<<<< HEAD

$route['appointments/view/(:any)'] = 'appointments/view/$1'; // $1 represents anything
$route['account/account_details/(:any)'] = 'account/account_details/$1'; // $1 represents anything
$route['(:any)'] = 'pages/view/$1'; // $1 represents anything
=======
$route['appointments/view/(:any)'] = 'appointments/view/$1'; // $1 represents anything
$route['backend'] = 'backend/index';
>>>>>>> 8b6d7cd9d0a1d963a085ca2bb9cda8c181d0ec0a
