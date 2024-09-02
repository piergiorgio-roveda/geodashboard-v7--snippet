<?php
function _init($o,$ds){

  $tmpres = query__run1($ds);

  if ($tmpres['response'] != '200') {
    exit__204($msg='<!--empty-->');
  }

  $o['response'] = intval($tmpres['response']);

  // ------------------------------------------------

  $_columns = $tmpres['columns'];
  $_dataArray = $tmpres['dataArray'];
  unset($tmpres);

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
    // $_marker['geometry']=json_decode($_p['geojson'],true);
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


// ------------------------------------------------

function query__run1($ds){

  $bind = array();
  $bind['cols'] = array();
  $bind['val'] = array();

  $query = "
    SELECT stars
    FROM download_geodata
    WHERE folder_slug = '".$ds["folder_slug"]."'
    ;";
    $tmpres = getResultSetArray($query,array());
  unset($query,$columnString,$placeHolders,$bind);
  return $tmpres;

}