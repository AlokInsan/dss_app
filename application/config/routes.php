<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['login'] = 'home/login';

$route['dera-sacha-sauda-history'] = 'frontcontroller/dsshistory';

$route['spiritual-masters-shah-mastana-ji-maharaj'] = 'frontcontroller/spiritualmasters1';
$route['spiritual-masters-param-pita-shah-satnam-ji-maharaj'] = 'frontcontroller/spiritualmasters2';
$route['spiritual-masters-saint-gurmeet-ram-rahim-singh-ji-insan'] = 'frontcontroller/spiritualmasters3';
$route['principle'] = 'frontcontroller/principle';
$route['jaam-e-insan'] = 'frontcontroller/jaameinsan';
$route['healthy-living/meditation'] = 'frontcontroller/meditation';

$route['healthy-living/vegetarianism'] = 'frontcontroller/vegetarianism';
$route['healthy-living/de-addiction'] = 'frontcontroller/de_addiction';
$route['healthy-living/other-health-tips'] = 'frontcontroller/healthtips';
$route['healthy-living/diet-chart-for-obese'] = 'frontcontroller/dietchartforobese';

$route['default_controller'] = 'frontcontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
