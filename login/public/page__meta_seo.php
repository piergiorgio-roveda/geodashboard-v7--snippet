<?php
  $_meta = array(
    array("name"=>"author", "content"=>AUTHOR__NAME),
    array("name"=>"generator", "content"=>WEBAPP__NAME." v".APP_VERSION),
    array("name"=>"description", "content"=>$_page_attributes['g_description']),
    array("name"=>"twitter:card", "content"=>"summary_large_image"),
    array("name"=>"twitter:site", "content"=>TWITTER__SITE),
    array("name"=>"twitter:creator", "content"=>TWITTER__CREATOR),
    array("name"=>"twitter:title", "content"=>$_page_attributes['title_seo']),
    array("name"=>"twitter:description", "content"=>$_page_attributes['g_description']),
    array("name"=>"twitter:image", "content"=>FLAT_URL__ASSETS.'images/thumb.png'),
  );
  foreach ($_meta as $key => $value) {
    echo '<meta name="'.$value["name"].'" content="'.$value["content"].'">
    ';
  }
  unset($_meta, $key, $value);

  $_meta = array(
    array("property"=>"article:publisher", "content"=>AUTHOR__NAME),
    array("property"=>"article:modified_time", "content"=>$_page_attributes['update_at']),
    array("property"=>"og:locale", "content"=>$_page_attributes['page_lang']),
    array("property"=>"og:locale:alternate", "content"=>"it_IT"),
    array("property"=>"og:type", "content"=>"website"),
    array("property"=>"og:title", "content"=>$_page_attributes['title_seo']),
    array("property"=>"og:description", "content"=>$_page_attributes['g_description']),
    array("property"=>"og:url", "content"=>FLAT_URL),
    array("property"=>"og:site_name", "content"=>BUSINESS__NAME),
    array("property"=>"og:image", "content"=>FLAT_URL__ASSETS.'images/thumb.png'),
    array("property"=>"og:image:width", "content"=>"1180"),
    array("property"=>"og:image:height", "content"=>"820"),
  );
  foreach ($_meta as $key => $value) {
    echo '<meta property="'.$value["property"].'" content="'.$value["content"].'">
    ';
  }
  unset($_meta, $key, $value);

?>