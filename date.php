<?php 

$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"); 

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 

$datefr = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y"); 


?> 