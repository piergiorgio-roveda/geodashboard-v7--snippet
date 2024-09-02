<?php

// session_start(); // Start the session to access session variables

error_reporting(E_ALL);
ini_set('display_errors', 'on');
// ini_set('memory_limit', '200M');

header('Content-type: application/json');
define('G_SLUG', 'index');
// IF ROOT
// require('../../env.php');
// IF SUBFOLDER
require '../../../../env-v7.php';

include('../../env-folder.php');

// echo "APP_VERSION: ".APP_VERSION;

$postData = file_get_contents("php://input");
$ds = json_decode($postData,true);
$o = array();
// $ds['user_key'] = $_SESSION['secreteKey'];
header("Access-Control-Allow-Origin: *");

require('./functions.php');
require('./'.$ds['name'].'.php');

$o = _init($o,$ds);

echo (json_encode($o, JSON_PRETTY_PRINT));
exit;