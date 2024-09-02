<?php

function _init($ds){
  $o = array();
  $o = query__run($ds,$o);

  if ($o['tmpres']['response'] != '200') {
    exit__204($msg='<!--empty-->');
  }

  $o['response'] = intval($o['tmpres']['response']);

  // ------------------------------------------------

  $_columns = $o['tmpres']['columns'];
  $_dataArray = $o['tmpres']['dataArray'];
  unset($o['tmpres']);

  $i=0;
  $_features=array();

  foreach ($_dataArray as $k1 => $_row) {
    $i++;
    $_p=array();
    foreach ($_columns as $k2 => $_col__obj) {

      $_col__slug = $_col__obj['name'];

      if($_col__slug!='geom' && $_col__slug!='geom_3857'){
        $_p[$_col__slug] = $_row[$_col__slug];
      }

      // ---
      unset($k2,$_col__obj);
    }

    $_marker = array(
      'type' => 'Feature',
      'properties' => $_p
    );
    // if(!empty($g)){
    //   $_marker['geometry']=$g;
    // }
    unset($_p);

    $_features[] = $_marker;
    unset($_marker);

    // ---
    unset($k1,$_row);

  }
  unset($_dataArray,$_columns);

  $o['type']="FeatureCollection";
  $o['records']=$i;
  $o['features']=$_features;
  unset($_features,$i);

  return $o;

}

function query__run($ds,$o=array()){

  $bind = array();
  $bind['cols'] = array();
  $bind['val'] = array();
  $bind['cols'][] = 'g_slug';
  $bind['cols'][] = 'g_label';
  $bind['val'][] = $ds['new_secreteKey'];
  $bind['val'][] = $ds['new_nickname'];

  // Create a string of comma-separated column names
  $columnString = implode(',', $bind['cols']);

  // Create a string of named placeholders
  $placeHolders = ":" . implode(', :', $bind['cols']);

  $query = "
    INSERT INTO pixels_users
      (".$columnString.")
    VALUES
      (".$placeHolders.")
    RETURNING pid
    ";
    $tmpres = getResultSetArray($query,$bind);
  unset($query,$columnString,$placeHolders,$bind);
  $o['tmpres'] = $tmpres;
  unset($tmpres);
  return $o;
}
