<?php 

function _init($ds){
  return items__list__get();
}

function items__list__get(){

  $i=0;
  $_features=array();

  // --- Ready for Loop!
    $i++;
    $_p = array();

    // --- Ready for Columns Loop!
      $_p['page_slug'] = 'login';
      $_p['page_label'] = 'Login Form';
      $_p['page_url'] = DOMAIN_URL.'geodashboard-v7/snippet/login/';
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