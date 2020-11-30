<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;

 
$route['admin'] = 'admin_user/index';
$route['admin/welcome'] = 'admin_user/welcome';
$route['admin/login'] = 'admin_user/index';
$route['admin/logout'] = 'admin_user/logout';
$route['admin/login/validate_credentials'] = 'admin_user/validate_credentials';

$route['admin/users'] = 'admin_user/userslist';
$route['admin/signup'] = 'admin_user/signup';
$route['admin/users/add'] = 'admin_user/add';
$route['admin/users/update/(:any)'] = 'admin_user/update/$1';
$route['admin/users/delete/(:any)'] = 'admin_user/delete/$1';
$route['admin/users/index/(:any)'] = 'admin_user/userslist/$1';

$route['admin/newsupdate'] = 'admin_newsupdate/index';
$route['admin/newsupdate/index/(:any)'] = 'admin_newsupdate/index/$1';
$route['admin/newsupdate/add'] = 'admin_newsupdate/add';
$route['admin/newsupdate/update'] = 'admin_newsupdate/update';
$route['admin/newsupdate/update/(:any)'] = 'admin_newsupdate/update/$1';
$route['admin/newsupdate/delete/(:any)'] = 'admin_newsupdate/delete/$1';
$route['admin/newsupdate/deletenewsupdateimage/(:any)'] = 'admin_newsupdate/deletenewsupdateimage/$1';

$route['admin/promotion'] = 'admin_promotion/index';
$route['admin/promotion/list'] = 'admin_promotion/index';
$route['admin/promotion/add'] = 'admin_promotion/add';
$route['admin/promotion/update'] = 'admin_promotion/update';
$route['admin/promotion/update/(:any)'] = 'admin_promotion/update/$1';
$route['admin/promotion/delete/(:any)'] = 'admin_promotion/delete/$1';
$route['admin/promotion/(:any)'] = 'admin_promotion/index/$1'; //$1 = page number

$route['admin/product'] = 'admin_product/index';
$route['admin/product/list'] = 'admin_product/index';
$route['admin/product/add'] = 'admin_product/add';
$route['admin/product/update'] = 'admin_product/update';
$route['admin/product/update/(:any)'] = 'admin_product/update/$1';
$route['admin/product/delete/(:any)'] = 'admin_product/delete/$1';
$route['admin/product/(:any)'] = 'admin_product/index/$1'; //$1 = page number
