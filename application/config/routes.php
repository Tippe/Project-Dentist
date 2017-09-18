<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1'; // $1 represents anything
$route['404_override'] = '';
<<<<<<< HEAD
$route['translate_uri_dashes'] = FALSE;

=======
$route['translate_uri_dashes'] = FALSE;
>>>>>>> 11071da997f9a707079b7d87cb4c656730a91a8e
