<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1'; // $1 represents anything
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

