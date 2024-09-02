<?php 

require '/mnt/volume_fra1_01/cityplanner.biz/env-h3hkngbjrg69bfje9sz8fm2u.php';
require '/mnt/volume_fra1_01/cityplanner.biz/wp-config-extends.php';

// define('APP_VERSION', '7.0.0');
define('ENVIRONMENT', 'development');
// define('MAIN_COLOR', '#0d24ff'); // BLUE

// require './env-folder.php';

define('WEBAPP__NAME','[GEO]DASHBOARD-v.'.APP_VERSION);
define('AUTHOR__NAME','Piergiorgio Roveda');
define('BUSINESS__NAME','Cityplanner.biz');
define('BUSINESS__TAGLINE','Charting cities, populations, and throughfares in preparation for tomorrow’s solutions.');
define('BUSINESS__EMAIL','piergiorgio.roveda@cityplanner.biz');
define('TWITTER__SITE','@Null_Island_Geo');
define('TWITTER__CREATOR','@Null_Island_Geo');
define('LINKEDIN__URL','https://www.linkedin.com/in/piergiorgioroveda-gis/');
define('BUCKET', 'https://geo-source.ams3.digitaloceanspaces.com/');

// if(!empty($_GET["map"])){
//   $canonical = FLAT_URL.G_SLUG.'.php?map='.$_GET["map"];
// }else{
  $canonical = 'https://cityplanner.biz/geodashboard-v7/snippet/template-map-sidebar/index.php';
// }

define('THUMB', BUCKET.'screenshoots/24-070809/banner-geodashboard.png');
$_page_attributes = array(
  "page_lang"=>"en-US",
  "title"=>"Template Map Sidebar",
  "title_seo"=>"Template Map Sidebar",
  "seo_description"=>"Template Map Sidebar",
  "g_description"=>"Template Map Sidebar",
  "g_description_short"=>"Template Map Sidebar",
  "created_at"=>"2024-09-02T12:00:00+00:00",
  "update_at"=>"2024-09-02T12:00:00+00:00",
);