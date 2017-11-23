<?php
$action=$_REQUEST['action'];

switch ($action) {
	case 'voirPraticiens':

		$loginVisiteur=$_SESSION['loginVisiteur'];

		$leVisiteur=$pdo->getIdVisiteur($loginVisiteur);

		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

		$lesPraticiens=$pdo->getPraticiensVisiteur($idVisiteur);

		include("vues/v_PraticiensVisiteur.php");

		break;

	case 'supprimerAffectation':

		$loginVisiteur=$_SESSION['loginVisiteur'];

		$leVisiteur=$pdo->getIdVisiteur($loginVisiteur);

		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

		$lesPraticiens=$pdo->getPraticiensVisiteur($idVisiteur);

		include("vues/v_PraticiensVisiteur.php");

		break;
	
	default:
		
		break;
}



?>
