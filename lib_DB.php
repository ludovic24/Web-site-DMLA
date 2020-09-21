<?php
  function connection($HOSTNAME, $DBNAME, $USER, $PASSWD){
    $pdo = null;
    try{
      $pdo = new PDO("mysql:host=$HOSTNAME;dbname=$DBNAME",$USER,$PASSWD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e){
      die('Erreur : ' . $e->getMessage());
    }
    return $pdo;
  }
  
  function select($pdo, $query){
    try{
      $pdos = $pdo->query($query);
      $tab = $pdos->fetchAll(PDO::FETCH_ASSOC);
      $pdos->closeCursor();
      return $tab;
    }
    catch (PDOException $pdoe){
       echo '<p>Erreur : '.$pdoe->getMessage().'</p>\n';
       echo '<p>N° : '.$pdoe->getCode().'</p>\n'; 
    }
  }
?>

