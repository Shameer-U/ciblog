<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['posts/update'] = 'posts/update';
$route['posts/create'] = 'posts/create';
$route['posts/(:any)'] = 'posts/view/$1';/*controller_name/methode_inside_controller/variable_passed_to_methode */
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
