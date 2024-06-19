<?php
define('PAGE__SLUG', '_list');

define('SERVER__ROOT', $_SERVER["DOCUMENT_ROOT"]); // /mnt/volume_fra1_01/cityplanner.biz

/*
  $_SERVER["REQUEST_URI"]
  can be:
    - /geodashboard-v7/snippet/_list/index.php
    - /geodashboard-v7/snippet/_list/
  PAGE__FOLDER will be:
    - /geodashboard-v7/snippet/
*/
$_path = str_replace('index.php', '',$_SERVER["REQUEST_URI"]); // if exist  
$_path = str_replace(PAGE__SLUG.'/', '',$_path);
define('PAGE__FOLDER', $_path); // /geodashboard-v7/snippet/
unset($_path);

if (strpos($_SERVER["HTTP_HOST"], 'www') !== false
  || $_SERVER["REQUEST_SCHEME"] !== 'https') {
  $_path = str_replace('www.', '',$_SERVER["HTTP_HOST"]);
  $_path = 'https://'.$_path.PAGE__FOLDER.PAGE__SLUG.'/';
  header('Location: '.$_path);
  exit; // Prevent further script execution
}

define('FLAT_FOLDER',SERVER__ROOT.PAGE__FOLDER.PAGE__SLUG.'/');
define('FLAT_FOLDER__PUBLIC',FLAT_FOLDER.'public/');
define('FLAT_FOLDER__ASSETS',FLAT_FOLDER.'assets/');
define('FLAT_FOLDER__API', FLAT_FOLDER.'api/');

define('DOMAIN_URL','https://'.$_SERVER["HTTP_HOST"].'/');
define('FLAT_URL',DOMAIN_URL.PAGE__FOLDER.PAGE__SLUG.'/');
define('FLAT_URL__PUBLIC',FLAT_URL.'public/');
define('FLAT_URL__ASSETS',FLAT_URL.'assets/');
define('FLAT_URL__API', FLAT_URL.'api/');

define('FLAT_URL__SOURCE', DOMAIN_URL.'source/');
