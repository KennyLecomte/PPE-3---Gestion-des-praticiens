<?php
require_once("modele/class.pdoLBC.inc.php");


if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{
			$reponse=$pdo->getRegion(); // avant d'afficher la vue du formulaire
			include("vues/v_ajoutPraticien.php");break;}
	case 'praticien' :
		{include("Controlleurs/c_Praticien.php");break;}
}
?>