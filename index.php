<?php 
  include 'header.php';
  include 'menu.php';

?>


  <div id='accueil'>

  
    <div id='contenuAccueil'>
        <h2>Bienvenue sur la page de l’association DMLA !</h2>
            <p>Vous trouverez ici toutes les informations sur la Dégénérescence Maculaire Liée à l’Âge, comment et pourquoi elle se forme, quels sont les symptômes et les traitements.</p>
    </div>

    <div id='PlAbo'>
        <h2>Devenez bénévole !</h2>
        <p>Sur la région parisienne, nous recherchons des adhérents souhaitant rejoindre le réseau des bénévoles.En province, nous recherchons des bénévoles souhaitant ouvrir ou rejoindre une antenne locale.</p>
        <a href="#"><div id='btAbo'><p>En savoir plus ?</p></div></a>

        </div>

    <div id="PlDpt">
    <form  method="post">
    

          <h3>Rechercher une antenne à proximiter </h3>

          <div id="choix">
          <label for="NumDpt">Entrez votre numéro de département :</label>
          <input type="number" id="NumDpt" name="NumDpt" min="0" max="99" required />
          <input type="submit" id="BtNumDpt" name="BtNumDpt" value="Ok" style="-moz-appearance: textfield" />
          </div>

          <div id="affichRes">
          <?php
          include 'antenne.php';
          ?>
          </div>
          </form>
          </div>

</div>
  <?php
    include 'footer.php';
  ?>