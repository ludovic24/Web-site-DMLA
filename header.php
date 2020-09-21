<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Association DMLA</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <?php
    session_start();
    include 'connection.php';
    include 'date.php';
  ?>

  <div id='numVert'> 
    <p>NUMERO VERT : 0 800 880 660</p>
  </div>

  
  <?php   include 'login.php'; ?>
<?php 
  include 'outilAcces.php';
?>

  <div id="btdon">
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
  <input type="hidden" name="cmd" value="_s-xclick" />
  <input type="hidden" name="hosted_button_id" value="6MR4PMPNGK64C" />
  <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif"  name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
  <img alt=""  src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
  </form>
  </div>


  <div id='imgAccueil'><img src="img/imgAccueil.png" alt='logo Association DMLA'></div>



