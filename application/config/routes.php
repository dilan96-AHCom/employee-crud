<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//default routes...........................................
$route['default_controller'] = 'WelcomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;





//defined routes...................................................................


//pass parameters values over URL
// :any means "any type" | :num means "only numbers" can pass
$route['parametervalue/(:any)'] = 'Backend/EmployeeController/parameter/$1';


//employee routes

$route['load'] = 'Backend/User/index';

$route['home'] = 'Backend/EmployeeController/home';
$route['about'] = 'Backend/EmployeeController/about';
$route['info'] = 'Backend/EmployeeController/info';
$route['edit/(:num)'] = 'Backend/EmployeeController/edit/$1';

$route['register'] = 'Backend/EmployeeController/reg';
$route['store'] = 'Backend/EmployeeController/store';
$route['update/(:num)'] = 'Backend/EmployeeController/update_employee/$1';
$route['delete/(:num)'] = 'Backend/EmployeeController/delete_employee/$1';

//this route called from footer.php and related to jquery. 
$route['confirmdelete/(:any)']['DELETE'] = 'Backend/EmployeeController/delete_employee/$1';
// we can pass the data without ['DELETE'] attribute, then web application will work. but ,
// when you are sending an API, that time required this additional one. 
//ex:- if you are using Postman for send-data/delete-data/etc.. that time you need this attribute with method like DELETE/etc..


// login and register for user & admin
$route['signin'] = 'WelcomeController/index';

$route['authregister'] = 'WelcomeController/register';

$route['login'] = 'RegisterController/login';
