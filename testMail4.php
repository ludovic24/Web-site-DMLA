<?php 
require_once "Mail.php"; // Appel de la librairie de PEAR Mail

//Attention, il faut autoriser l'utilisation du SMTP Gmail, depuis l'interface Gmail, donc autoriser l'accès pour les applications moins sécurisées. Google a commencé à bloquer les applications et les périphériques qui, selon eux, n’utilisaient pas les normes de sécurité modernes. Cependant, l’accès aux applications moins sécurisées peut être facilement activé : https://www.google.com/settings/security/lesssecureapps

if (isset($_GET['email_address'],$_GET['nom_user'],$_GET['message'])) {

	$from = $_GET['nom_user'] . " <" . $_GET['email_address'] .">";
	$to = "Ludovic leman <ludovicleman2@gmail.com>"; 
	$cc = $_GET['email_address'];
	$subject = "Message d'un internaute : " . $_GET['sujet'];
	$body = $_GET['message'] . "\n" . $_GET['email_address'];
	$host = "smtp.gmail.com"; 
	$username = "ludovicleman2@gmail.com"; //asso
	$password = "ludovic890098"; // à remplir ! mot de passe du mail dans $username

	$recipients = $from.", ".$cc;
	$headers['to'] = $to;
	$headers['From']    = $from;
	$headers['Subject'] = $subject;
	$headers['Cc']      = $cc;
	$headers['Reply-To'] = $cc;

	$smtp = Mail::factory('smtp',
	  array ('host' => $host,
	  'auth' => true,
	  'port' => '587',  // verifier si Gmail ouvre bien ce port... Sinon, chercher le bon !
	  'username' => $username,
	  'password' => $password));
	$mail = $smtp->send($recipients, $headers, $body);
	if (PEAR::isError($mail)) {
		echo("<p>" . $mail->getMessage() . "</p>");
	}
	else {
		echo("<p>Message successfully sent!</p>");
	}
}
else
	echo "Merci de remplir le <a href=\"testForm.html\">formulaire</a>.";
?>
