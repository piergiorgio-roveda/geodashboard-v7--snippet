<?php

function _init($ds){
session_start(); // Start the session to access session variables
$o['SESSION'] = $_SESSION['secreteKey'];

  return $o;

}
?>