<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products/(:any)'] = 'products/index/$1';
$route['default_controller'] = 'web/view';
$route['(:any)'] = 'web/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
