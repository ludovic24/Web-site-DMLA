<?php
  if(isset($_POST['button'])){
    header("Location:pageConnexion.php");
  
}
  if (isset($_POST['valideConnexion'])) {

  
  $_SESSION["nom"] = $_POST['nom'] ;
  $_SESSION["motPasse"]=md5($_POST["pw"]);


  $sql = $pdo->query('SELECT * FROM login WHERE nom = "'.$_SESSION['nom'].'";');

    
    while ($donnees = $sql->fetch()){

    $_SESSION["nombdd"] = $donnees['nom'] ;
    $_SESSION["mdpbdd"] = $donnees['mdp'] ;
    $_SESSION["fonctionbdd"]=$donnees['fonction'];
   
    
  }




  if($_SESSION["nom"]==$_SESSION["nombdd"]&&$_SESSION["motPasse"]==$_SESSION["mdpbdd"]){
  	$_SESSION["connectez"]="1";
  	$connectez=$_SESSION["connectez"];

  }

    if($_SESSION["nom"]!=$_SESSION["nombdd"]&&$_SESSION["motPasse"]!=$_SESSION["mdpbdd"]){
  	$_SESSION["connectez"]="0";
    $connectez=$_SESSION["connectez"];

  }
  }

  if(isset($_POST['deconnexion'])){
 
    unset($_SESSION["nom"]);
    unset($_SESSION["motPasse"]);
    unset($_SESSION["nombdd"]);
    unset($_SESSION["mdpbdd"]);
    unset($_SESSION["fonctionbdd"]);
    unset ($_POST['valideConnexion']);
    header('Location:index.php');
    session_destroy();

    }
         

 
  ?>



