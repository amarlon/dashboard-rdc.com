<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['(:any)/home'] = "home";
$route['home'] = "home";
$route['(:any)/users'] = "users";
$route['users'] = "users";
$route['(:any)/plateforme'] = "plateforme";
//$route['(:any)/sign'] = "sign";
//$route['(:any)/sign'] = "SIGN";
$route['(:any)/admin'] = "admin";
$route['(:any)/admin'] = "ADMIN";
//$route['(:any)/signup'] = "signup";
//$route['(:any)/signup'] = "SIGNUP";
//$route['(:any)/auth'] = "auth";


$route['404_override'] = 'pagenotfound';
$route['translate_uri_dashes'] = FALSE;


