<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['appoinment'] = 'home/appoinment';
$route['about'] = 'home/aboutus';
$route['highlights'] = 'home/highlights';
$route['who_we_are'] = 'home/who-we-are';
$route['achievementst'] = 'home/achievementst';
$route['mission'] = 'home/mission';
$route['gallery'] = 'home/gallery';
$route['our-projects'] = 'home/ourprojects';
$route['services'] = 'home/ourservices';
$route['contact'] = 'home/contactus';
$route['disclaimer'] = 'home/disclaimer';
$route['industry-type-and-subsidy'] = 'home/industry_type_and_subsidy';
$route['startup_and_business_support'] = 'home/startup_and_business_support';
$route['industrial_association_support'] = 'home/industrial_association_support';
$route['incubation_center_assistance'] = 'home/incubation_center_assistance';
$route['blogdetails/(:any)/(:any)'] = 'home/blog/$1/$2';
// $route['viewservice/(:any)/(:any)'] = 'home/view_services/$1/$2';
$route['view-service'] = 'home/view_services';


