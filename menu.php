
<div id='menu'>
  <nav class="shift">
  <ul id="menu-demo2">
  <li id="border"><a href="index.php">Accueil</a></li>
  <li><a href="pageDmla.php">La DMLA</a>
    <ul class="niveau2">
      <li> <a href="pageGrille.php"> Test de la grille d'Amsler</a></li>
      <li><a href="pageForme.php">Les principales formes de DMLA</a></li>
      <li><a href="pageSymptome.php">Les premiers sympt&#244;mes</a>
            <ul id="niveau3">
              <li><a href="#">Les examens</a></li>
              <li><a href="#">Les Traitement</a></li>
            </ul>
      </li>
     </ul> 
  </li>

  <li><a href="pageAssociation.php">L'association</a>
    <ul class="niveau2">
      <li><a href="pageAssociation.php">Qui somme nous</a></li>
      <li><a href="pageBureau.php">Le bureau</a></li>
      <li><a href="pageConseil.php">Conseil scientifique</a></li>
    </ul>      
  </li>

  <li><a href="pageContact.php">Contactez-nous</a>
        <ul class="niveau2">
            <li><a href="#">Adh&eacute;rer</a></li>
        </ul>
  </li>
      <li><a href="pageActu.php" >Actualit&eacute;s </a> </li>

       <?php

      if($_SESSION["connectez"] == "1" && $_SESSION["fonctionbdd"] == 'admin'){
      echo "<li><a href='testajout.php'>Gestion</a>
                <ul class='niveau2'>
                      <li><a href='ajoutAntenne.php'>Ajout d'une antenne</a></li>
                      <li><a href='ajoutAdherent.php'>Ajout d'un adherent</a></li>
                      <li><a href='ajoutArticle.php'>Ajout d'un article</a></li>
                </ul>
            </li>";
    }

    ?>
    
 
    </ul>

  </nav>

  <?php
  if($_SESSION["connectez"] == "1" ){
     echo "<div id='plConnexion'>";
    echo '<div id="BtConnexion">
          <form method="post">
          <input type="submit" id="buttonConnexion" name="deconnexion" value="Deconnexion" />
          </form>
          </div>
          </div>';
  
  } 
  else{
  echo "<div id='plConnexion'>";
  echo '<div id="BtConnexion">
        <form method="post">
        <input type="submit" id="buttonConnexion" name="button" value="Connexion">
        </form>
        </div>
        </div>';
   
 }

  ?>
  
    
</div>
<div id="contenu">

