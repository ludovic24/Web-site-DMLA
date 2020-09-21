<?php 
  include 'header.php';
  include 'menu.php';

?>

<div class='formulaireConnexion'>

            <h2>Bienvenue</h2>
            <p> Veuillez vous connectez <p>
            <form method='post'>
                 <input type='text' name='nom' placeholder="Votre Mail :" required/><br />
                 <input type='password' name='pw'  placeholder="Votre mot de passe : "required/><br />
                 <?php
                 if (isset($_POST['valideConnexion'])&&$connectez=="0"){
                  echo "Mot de passe ou Email Incorrect.";
                 }
                 ?>
                 <input type='submit' id='' class="buttonEnvoyer" name='valideConnexion' value='Ok'>
            </form>
            </div>
            
          </div>
<?php
    include 'footer.php';
  ?>