<?php 
  include 'header.php';
  include 'menu.php';
?>

<!-- contenu -->


	
	<div class="formulaire">
	<h2>Formulaire de contact</h2>
	<form id="contact_form" action="testMail4.php" method="GET">

 	 	<div class="placementForm">
    	<input id="name" class="input" name="nom_user" type="text"  size="30"placeholder="Prénom Nom" required /><br />
   		<span id="name_validation" class="error_message"></span>
  		</div>

  		<div class="placementForm">
    	<input id="email" class="input" name="email_address" type="Mail"  size="30" placeholder="Mail" required /><br />
    	<span id="email_validation" class="error_message"></span>

  		</div>
 	 	<div class="placementForm">
    	<textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Text" required></textarea><br />
    	<span id="message_validation" class="error_message"></span>
  		</div>
    
    	<input class="buttonEnvoyer" type="submit" value="Envoyer" />
	</form>
</div>

<?php
  include 'footer.php';
?>