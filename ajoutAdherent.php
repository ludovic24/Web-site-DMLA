<?php
  include 'header.php';
  include 'menu.php';
?>

<div class="formulaire">
  <h2> Ajout d'un adherent </h2>
  <form method="post">

          <div class="placementForm">
          <input type="text" class="input" name="nomAdherent" placeholder="Entrez le Nom" required /> <!-- min="0" max="99" required="required" -->
          <br />
          </div>

          <div class="placementForm">
          <input type="text" class="input" name="prenomAdherent" placeholder="Entrez le Prénom" required />
          <br />
          </div>
          
          <div class="placementForm">
          <input type="text" class="input" name="ageAdherent" placeholder="Entrez l'age" required />
          <br />
          </div>
          
          <div class="placementForm">
          <input type="text" class="input" name="adresseAdherent" placeholder="Entrez l'adresse" required />
          <br />
          </div>
          
          <div class="placementForm">
          <input type="text" class="input" name="mailAdherent" placeholder="Entrez le mail" required /> 
          <br />
          </div>
          
          <div class="placementForm">
          <input type="tel" class="input" name="telAdherent" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" placeholder="Entrez le numero de téléphone: Format: 06.12.34.56.78" required />
          <br />
          </div>
          
          <div class="placementForm">
          <input type="password" class="input" name="mdpAdherent" placeholder="Entrez le mdp" required />
          <br />
          </div>
          
          <input type="submit" class="buttonEnvoyer" name="entrezAdherent" value="Ok" />
          <br />


    

          <!--  Ajoute d'un adhérent dans la base de donnée --> 

          <?php

          if(isset($_POST["nomAdherent"])&&isset($_POST["prenomAdherent"])&&isset($_POST["ageAdherent"])&&isset($_POST["adresseAdherent"])&&isset($_POST["mailAdherent"])&&isset($_POST["telAdherent"])&&isset($_POST["mdpAdherent"])&&isset($_POST["entrezAdherent"])){

            $nomAdherent = $_POST["nomAdherent"];
            $prenomAdherent = $_POST["prenomAdherent"];
            $ageAdherent = $_POST["ageAdherent"];
            $adresseAdherent = $_POST["adresseAdherent"];
            $mailAdherent = $_POST["mailAdherent"];
            $telAdherent = $_POST["telAdherent"];
            $adresseAdherent2 = addslashes($adresseAdherent);
            $mdpAdherent = $_POST["mdpAdherent"];
            $mdpAdherent2 = md5($mdpAdherent);

            $insertAdherent = "INSERT INTO adherent(nom,prenom,age,adresse,mail,tel,fonction) VALUES ('$nomAdherent','$prenomAdherent','$ageAdherent','$adresseAdherent2','$mailAdherent','$telAdherent','admin');";
            $pdo->exec($insertAdherent);
            $insertmdp = "INSERT INTO login(nom,mdp,fonction) VALUES('$mailAdherent','$mdpAdherent2','admin');";
            $pdo->exec($insertmdp);




          }
          ?>         



<?php
  include 'footer.php';
?>
