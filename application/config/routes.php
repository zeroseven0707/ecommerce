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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['default_controller'] = 'client/index';
$route['detail-product/(:num)'] = 'client/detail_product/$1';
$route['buy-now/(:num)'] = 'client/buynow/$1';
$route['freebies'] = 'client/freebies';
$route['catalog'] = 'client/catalog';
$route['new-product'] = 'client/product_last';
$route['all'] = 'client/all';
$route['product-terlaris'] = 'client/product_terlaris';
$route['lisensi'] = 'client/lisensi';
$route['guide'] = 'client/guide';
$route['contact'] = 'client/contact';
$route['product/search'] = 'client/search';
$route['product-promo'] = 'client/promo';

$route['admin'] = 'admin/dashboard';
$route['admin/products'] = 'admin/products';
$route['admin/products-purchases'] = 'admin/product_purchases';
$route['admin/products-views'] = 'admin/product_views';
$route['admin/products/create'] = 'admin/create_product';
$route['admin/products/edit/(:num)'] = 'admin/edit_product/$1';
$route['admin/products/delete/(:num)'] = 'admin/delete_product/$1';
$route['export-products-csv'] = 'admin/export_csv';

$route['admin/licenses'] = 'admin/licenses';
$route['admin/licenses/create'] = 'admin/create_license';
$route['admin/licenses/edit/(:num)'] = 'admin/edit_license/$1';
$route['admin/licenses/delete/(:num)'] = 'admin/delete_license/$1';

$route['admin/guides'] = 'admin/guides';
$route['admin/guides/create'] = 'admin/create_guide';
$route['admin/guides/edit/(:num)'] = 'admin/edit_guide/$1';
$route['admin/guides/delete/(:num)'] = 'admin/delete_guide/$1';


$route['admin/widgets'] = 'admin/widgets';
$route['admin/widgets/create'] = 'admin/create_widget';
$route['admin/widgets/edit/(:num)'] = 'admin/edit_widget/$1';
$route['admin/widgets/delete/(:num)'] = 'admin/delete_widget/$1';

$route['admin/shortcuts'] = 'admin/shortcuts';
$route['admin/shortcuts/create'] = 'admin/create_shortcut';
$route['admin/shortcuts/edit/(:num)'] = 'admin/edit_shortcut/$1';
$route['admin/shortcuts/delete/(:num)'] = 'admin/delete_shortcut/$1';

$route['admin/menu'] = 'admin/menu';
$route['admin/menu/create'] = 'admin/create_menu';
$route['admin/menu/edit/(:num)'] = 'admin/edit_menu/$1';
$route['admin/menu/delete/(:num)'] = 'admin/delete_menu/$1';

$route['admin/settings'] = 'admin/settings';
$route['admin/settings/update'] = 'admin/update_setting';

$route['admin/contact'] = 'admin/contact';
$route['admin/contact/save'] = 'admin/save_contact';

// Import Product
$route['import-products'] = 'admin/import_products';
$route['import-products-csv'] = 'admin/import_csv';
