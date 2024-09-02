<meta charset="UTF-8">
<title><?php echo $_page_attributes['title_seo'] ;?></title>
<?php
  $_meta = array(
    array("name"=>"viewport", "content"=>"width=device-width, initial-scale=1"),
    array("name"=>"apple-mobile-web-app-capable", "content"=>"yes"),
    array("name"=>"mobile-web-app-capable", "content"=>"yes"), // Added new meta tag
    array("name"=>"apple-mobile-web-app-status-bar-style", "content"=>"black"),
    array("name"=>"google", "content"=>"notranslate"),
    array("name"=>"msapplication-TileColor", "content"=>MAIN_COLOR),
    array("name"=>"msapplication-config", "content"=>"none"),
    array("name"=>"theme-color", "content"=>MAIN_COLOR),
  );
  foreach ($_meta as $key => $value) {
    echo '<meta name="'.$value["name"].'" content="'.$value["content"].'">
    ';
  }
  unset($_meta, $key, $value);
?>