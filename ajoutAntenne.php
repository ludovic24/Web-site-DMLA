<?php
  include 'header.php';
  include 'menu.php';
?>


<div class="formulaire">
  <h2> Ajout d'une antenne </h2>
	<form method="POST">

          <div class="placementForm">

          <input type="number"  class="input" name="Ndep" min="0" max="99" placeholder="Entrez le numéro de département : Ex 59"  required />
          <br />
          </div>

          <div class="placementForm">
          <input type="text" class="input" name="hor" placeholder="Entrez l'horaire" required />
          <br />
          </div>

          <div class="placementForm">
          <input type="text" class="input" name="lieu" placeholder="Entrez le lieu" required />
          <br />
          </div>

          <div class="placementForm">
          <input type="text" class="input" name="con" placeholder="Entrez le contact : Ex Brigitte VASSAL (tél. 01.45.92.75.12)" required />
          </div>

          <input type="submit" class="buttonEnvoyer" name="entrez" value="Ok" />

          <?php 
          if(isset($_POST["Ndep"])&&isset($_POST["hor"])&&isset($_POST["lieu"])&&isset($_POST["con"])&&isset($_POST["entrez"])){

          	$num = $_POST["Ndep"];
          	$horaire = $_POST["hor"];
          	$lieu = $_POST["lieu"];
          	$contact = $_POST["con"];

          	$insertDep = "INSERT INTO dep(num,date,lieu,contact) VALUES ('$num','$horaire','$lieu','$contact');";


          	$pdo->exec($insertDep);


          }

          ?>


     </form>
</div>
      <!--  Ajoute une antenne dans la base de donnée -->          

          <?php 
          if(isset($_POST["Ndep"])&&isset($_POST["hor"])&&isset($_POST["lieu"])&&isset($_POST["con"])&&isset($_POST["entrez"])){

            $num = $_POST["Ndep"];
            $horaire = $_POST["hor"];
            $lieu = $_POST["lieu"];
            $contact = $_POST["con"];

            $insertDep = "INSERT INTO dep(num,date,lieu,contact) VALUES ('$num','$horaire','$lieu','$contact');";


            $pdo->exec($insertDep);


          }

          ?>
<?php
  include 'footer.php';
?>
