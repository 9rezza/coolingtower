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
$route['default_controller'] = 'scada';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['scada_ct'] = 'scada/scada_ct';

$route['get_motor_limit_by_id'] = 'scada/get_motor_limit_by_id';
$route['save_motor_limit_by_id'] = 'scada/save_motor_limit_by_id';
$route['save_ct_param_by_2name'] = 'scada/save_ct_param_by_2name';
$route['save_ct_param_by_3name'] = 'scada/save_ct_param_by_3name';

$route['consumption'] = 'scada/consumption';
$route['get_data_consumption'] = 'scada/get_data_consumption';
$route['get_data_consumption_specific_month'] = 'scada/get_data_consumption_specific_month';
$route['kwh_limit_update'] = 'scada/kwh_limit_update';

$route['ct_weld'] = 'scada/ct_weld';
$route['get_data_ct_weld_spec_date'] = 'scada/get_data_ct_weld_spec_date';
$route['get_ct_weld_limit'] = 'scada/get_ct_weld_limit';
$route['ct_weld_limit_update'] = 'scada/ct_weld_limit_update';

$route['ct_motor'] = 'scada/ct_motor';
$route['get_data_ct_motor_spec_date'] = 'scada/get_data_ct_motor_spec_date';
$route['ct_motor_limit_update'] = 'scada/ct_motor_limit_update';




$route['press_shop/line_5a'] = 'scada/line_5a';
$route['line/(:any)'] = 'scada/line/$1';

$route['alarm'] = 'alarm/alarm';
$route['alarm/(:any)'] = 'alarm/alarm/$1';
$route['get_alarm_by_code'] = 'alarm/get_alarm_by_code';
$route['get_alarm_by_machine_code'] = 'alarm/get_alarm_by_machine_code';
$route['upload_action_alarm'] = 'alarm/upload_action_alarm';


$route['symptom'] = 'symptom/symptom';
$route['symptom/(:any)'] = 'symptom/symptom/$1';
$route['get_data_today'] = 'symptom/get_data_today';
$route['get_machine_line'] = 'symptom/get_machine_line';
$route['upload_standard'] = 'symptom/upload_standard';


$route['hmi_update_postition'] = 'scada/hmi_update_postition';

// $route['get_data_today/(:any)'] = 'symptom/get_data_today/$1';


// $route['chart'] = 'main/chart';
// $route['production_trigger/(:any)'] = 'main/production_trigger/$1';
// $route['login'] = 'login/login';
// $route['check_credential'] = 'login/submit';
// $route['lemari/(:any)'] = 'main/toolbox/$1';
// $route['users'] = 'admin/account_manager';
// $route['get_json_users'] = 'admin/get_json_users';
// $route['username_check'] = 'admin/username_check';
// $route['reusername_check'] = 'admin/reusername_check';
// $route['get_user'] = 'admin/get_user';
// $route['insert_user'] = 'admin/insert_user';
// $route['delete_user/(:any)'] = 'admin/delete_user/$1';
// $route['history'] = 'main/history';
// $route['get_json_history/(:any)'] = 'main/get_json_history/$1';
// $route['action'] = 'main/action';
// $route['out'] = 'main/ambil';
// $route['in'] = 'main/taruh';