<?php 

function _init($ds){
  return items__list__get();
}

function items__list__get(){

  $i=0;
  $_features=array();

  $_list = array(
    array(
      'page_slug'=>'login',
      'page_label'=>'Login Form',
      'page_url'=>DOMAIN_URL.'geodashboard-v7/snippet/login/'
    ),
    array(
      'page_slug'=>'template1',
      'page_label'=>'template1',
      'page_url'=>DOMAIN_URL.'geodashboard-v7/snippet/template1/'
    ),
    array(
      'page_slug'=>'template-map-sidebar',
      'page_label'=>'template-map-sidebar',
      'page_url'=>DOMAIN_URL.'geodashboard-v7/snippet/template-map-sidebar/'
    ),
  );

  // --- Ready for Loop!
  foreach ($_list as $key => $value) {
    $i++;
    $_p = array();

    // --- Ready for Columns Loop!
      $_p['page_slug'] = $value['page_slug'];
      $_p['page_label'] = $value['page_label'];
      $_p['page_url'] = $value['page_url'];
    // --- Columns Loop --END

    $_marker = array(
      'type' => 'Feature',
      'properties' => $_p
    );
    unset($_p);

    $_features[] = $_marker;
    unset($_marker);
  }
  // --- Loop --END

  $o = array();
  $o['type']="FeatureCollection";
  $o['records']=$i;
  $o['features']=$_features;
  unset($_features,$i);
  $o['response'] = 200;

  return $o;

}