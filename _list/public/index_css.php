<?php
$_css = array(
  array(
    "rel"=>"stylesheet",
    "name"=>"bootstrap-core-css", 
    "href"=>"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", 
    "integrity"=>"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN",
    "crossorigin"=>"anonymous"
  ),
  array(
    "rel"=>"stylesheet",
    "name"=>"bootstrap-icons@1.11.3", 
    "href"=>"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  ),
  array(
    "rel"=>"preconnect",
    "name"=>"fonts.googleapis.com", 
    "href"=>"https://fonts.googleapis.com"
  ),
  array(
    "rel"=>"preconnect",
    "name"=>"fonts.gstatic.com", 
    "href"=>"https://fonts.gstatic.com"
  ),
  array(
    "rel"=>"stylesheet",
    "name"=>"project-css", 
    "href"=>FLAT_URL__PUBLIC."css/_style.css"
  ),
  array(
    "rel"=>"stylesheet",
    "name"=>"project-css", 
    "href"=>FLAT_URL__PUBLIC."css/_style__custom.css"
  ),
  array(
    "rel"=>"stylesheet",
    "name"=>"project-css", 
    "href"=>FLAT_URL__PUBLIC."css/wrapper__grid.css"
  ),
);
foreach ($_css as $key => $value) {
  $integrity = "";
  if(isset($value["integrity"])){
    $integrity = 'integrity="'.$value["integrity"].'"';
  }
  $crossorigin = "";
  if(isset($value["crossorigin"])){
    $crossorigin = 'crossorigin="'.$value["crossorigin"].'"';
  }
  echo '<link href="'.$value["href"].'" rel="'.$value["rel"].'"  type="text/css" '.$integrity.' '.$crossorigin.'>
  ';
}
unset($_css, $key, $value,$integrity,$crossorigin);
?>