<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['(:any)'] = 'welcome/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
