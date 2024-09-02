<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');
// ini_set('memory_limit', '200M');

define('APP_VERSION', '7.0.0');
define('ENVIRONMENT', 'development');
define('MAIN_COLOR', '#0d24ff'); // BLUE

require './env-folder.php';

define('WEBAPP__NAME','[GEO]DASHBOARD-v.'.APP_VERSION);
define('AUTHOR__NAME','Piergiorgio Roveda');
define('BUSINESS__NAME','Cityplanner.biz');
define('BUSINESS__TAGLINE','Charting cities, populations, and throughfares in preparation for tomorrow’s solutions.');
define('BUSINESS__EMAIL','piergiorgio.roveda@cityplanner.biz');
define('TWITTER__SITE','@Null_Island_Geo');
define('TWITTER__CREATOR','@Null_Island_Geo');
define('LINKEDIN__URL','https://www.linkedin.com/in/piergiorgioroveda-gis/');


require '../env.php';
require './public/page.php';