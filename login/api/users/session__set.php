<?php

function _init($ds){
  session_start(); // Start the session at the very beginning
  $_SESSION['secreteKey'] = $ds['secreteKey'];

  $o['message'] = 'Session set';  

  return $o;

}
?>