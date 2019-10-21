<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog/(:any)'] = 'blog/show/$1';

$route['blog/(:num)'] = 'blog/$1';
$route['blog'] = 'blog';

$route['about'] = 'about';
$route['contact'] = 'contact';