<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/delete/(:any)'] = 'news/delete/$1';
$route['news/(:any)/edit'] = 'news/edit/$1';
$route['news/create'] = 'news/create';
$route['news'] = 'news';
$route['news/(:any)'] = 'news/show/$1';

$route['default_controller'] = 'home';
$route['(:any)'] = 'home/view/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
