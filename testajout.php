<?php
  include 'header.php';
  include 'menu.php';
?>


<!--           ajouter des arcticle
 -->
          <!--  <h1> Ajout d'un article </h1>

          <form method="POST">

          <label for="titreArticle">Entrez le titre de l'article :</label>
          <input type="text" id="titreArticle" name="titreArticle">
          <br />
          
           <label for="name">Entrez le texte :</label>
          <input type="text" id="textArticle" name="textArticle" >
          <br />
          <input type="submit" id="entrezArticle" name="entrezArticle" value="ok">
          </form>
          <?php

          if(isset($_POST['entrezArticle'])){

            $titreArticle = $_POST["titreArticle"];
            $textArticle = $_POST["textArticle"];

            $insertArticle = "INSERT INTO article(titre,contenu) VALUES ('$titreArticle','$textArticle');";
              $pdo->exec($insertArticle);


          }
          ?>
          <form method="post">
          <SELECT name="modifArticle" size="1">
          <?php

          $sql = $pdo->query('SELECT titre FROM article ;');

    
          while ($donnees = $sql->fetch()){

          $titre = $donnees['titre'];
          echo "<option>".$titre."</option>" ;
   

          }

          ?>
          <input type="submit" id="validerModif" name="validerModif" value="ok">

          </SELECT>

          </form>

          <?php

            if(isset($_POST['modifArticle'])){

          $sql = $pdo->query('SELECT * FROM article WHERE titre ="'.$titre.'";');

    
           while ($donnees = $sql->fetch()){

          $titre = $donnees['titre'];
          $contenu = $donnees['contenu'];

   

          }


          echo "<form method='POST'>

          <label for='titreArticle'>Entrez le titre de l'article :</label>
          <input type='text' id='titreArticle' name='titreArticle' value=$titre>
          <br />
          
           <label for='name'>Entrez le texte :</label>
          <input type='text' id='textArticle' name='textArticle' value =$contenu>
          <br />
          <input type='submit' id='entrezArticle' name='entrezArticle' value='ok'>
          </form>";

            }


          ?>




     </form>
</div>  -->
<?php 

$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"); 

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 

$datefr = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y"); 

echo  $datefr; 

?> 


  <?php
  include 'footer.php';
  ?>
