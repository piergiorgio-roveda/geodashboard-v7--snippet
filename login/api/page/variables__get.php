<?php 

function _init($ds){
  return page__variables__get($ds["map__slug"]);
}

function page_attributes__get($_page__slug){

  $_variables = page__variables__get($_page__slug);

  $_page_attributes = array();
  foreach ($_variables["features"] as $value) {
    foreach ($value["properties"] as $key => $val) {
      $_page_attributes[$key] = $val;
    }
  }

  return $_page_attributes;
}

function page__variables__get($_page__slug){

  $i=0;
  $_features=array();

  // --- Ready for Loop!
    $i++;
    $_p = array();

    // --- Ready for Columns Loop!
      $_p['page_version'] = '1';
      $_p['page_lang'] = 'en-US';
      $_p['g_template'] = 'base';
      $_p['title_seo'] = 'Login Form';
      $_p['g_description_short'] = 'Login Form';
      $_p['g_description'] = '[GEO]DASHBOARD: Login Form Snippets.';
      $_p['created_at'] = '2024-06-19T12:00:00+00:00';
      $_p['update_at'] = '2024-06-19T12:00:00+00:00';
    // --- Columns Loop --END

    $_marker = array(
      'type' => 'Feature',
      'properties' => $_p
    );
    unset($_p);

    $_features[] = $_marker;
    unset($_marker);
  // --- Loop --END

  $o = array();
  $o['type']="FeatureCollection";
  $o['records']=$i;
  $o['features']=$_features;
  unset($_features,$i);
  $o['response'] = 200;

  return $o;

}