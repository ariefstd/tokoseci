<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['index'] = 'welcome/index';
$route['admin/seci'] = 'user/admin';
$route['admin/administrator'] = 'user/cek_admin';

$route['collection'] = 'welcome/collection';
$route['aboutus'] = 'welcome/aboutus';
$route['contact'] = 'welcome/contacto';
$route['sendemail'] = 'shopping/sendMail';
$route['sending'] = 'welcome/send_mail';

$route['detail'] = 'welcome/detail';
$route['mycart'] = 'welcome/mycart';
$route['cart'] = 'view_cart/index';

$route['v/(:any)']='pemodelan/$1';
$route['productdetail/(:any)'] = 'collection/detail/$1';
/***********productdetail*******************************************************************/
				// additional		information  //
/******************************************************************************/


$route['administratoris'] = 'user/index'; //controller
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
/* Use 'logout/(:any)' for beautiful url you've added */
/* The original of logout was ['logout'] */
$route['logout/(:any)'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/purchase'] = 'admin_property/purchase';
$route['admin/products'] = 'admin_products/index';
$route['admin/property'] = 'admin_property/index';
$route['admin/products/add'] = 'admin_products/add';
$route['admin/products/update'] = 'admin_products/update';
$route['admin/products/update/(:any)'] = 'admin_products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin_products/delete/$1';
$route['admin/products/(:any)'] = 'admin_products/index/$1'; //$1 = page number

$route['admin/shopping'] = 'shopping/index';
$route['register'] = 'welcome/registering';
$route['insert_reg'] = 'welcome/insert_register';
$route['my-account'] = 'welcome/myaccount';