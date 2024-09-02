<?php

function exit__204($msg='<!--empty-->'){

  $o['response'] = 204;

  $o['message'] = $msg;

  $o['type']='FeatureCollection';
  $o['features']=array();
  $o['records']=0;

  echo (json_encode($o, JSON_PRETTY_PRINT));
  exit;
}

function getResultSetArray($query,$bind=array()){

  $db=POSTGRES_DBNAME;
  $responseArray = array();
  $dbh = new PDO(
    "pgsql:host=".POSTGRES_HOST.";dbname=".$db."", POSTGRES_USER, POSTGRES_PASSWORD
  );

  try {

    if ($dbh === null) {
        throw new Exception("Failed to establish database connection.");
    }

    $sth = $dbh->prepare($query);
    if ($sth === false) {
        throw new Exception("Failed to prepare the query.");
    }

    if(!empty($bind)){
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      // $stmt = $dbh->prepare($sql);
      
      // Bind the values to the named placeholders
      foreach ($bind['cols'] as $index => $col) {
        $sth->bindParam(":".$col."", $bind['val'][$index]);
      }
    }

    // Perform other database operations
    $sth->execute();

    $rowCount = $sth->rowCount();

    if ($rowCount != 0) {
      // move result set to an associative array
      //$rsArray = $rsData->fetch_all(MYSQLI_ASSOC);
      $rsArray = $sth->fetchAll();
    
      // add array to return
      $responseArray['response'] = '200';
      $responseArray['dataArray'] = $rsArray;
      //--
      $responseArray['rowCount']=$rowCount;

      $total_column = $sth->columnCount();
      //var_dump($total_column);

      for ($counter = 0; $counter < $total_column; $counter ++) {
        $columns[] = $sth->getColumnMeta($counter);
      }
      $responseArray['columns'] = $columns;

    } else {
      // no data returned
      $responseArray['response'] = '204';
    }
      
    //}

    return $responseArray;        
  
  }
  catch (PDOException $e) {

      // PDOException handles PDO-related errors
      // echo "PDO Exception: " . $e->getMessage();

      $responseArray["response"] = '204';
      $responseArray['message'] = "PDO Exception: " . $e->getMessage();
      
      return $responseArray; 

  } 
  catch (Exception $e) {

      // Other types of exceptions
      // echo "Exception: " . $e->getMessage();

      $responseArray["response"] = '205';
      $responseArray['message'] = "Exception: " . $e->getMessage();
      
      return $responseArray; 
  }

}

?>