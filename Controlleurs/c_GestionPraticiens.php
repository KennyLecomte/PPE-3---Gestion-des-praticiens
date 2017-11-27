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

	case 'ajoutPraticienVisiteur':

		$praticien=$pdo->getPraticien();

		include("vues/v_ajoutPraticienVisiteur.php");

		break;

	case 'confirmAjoutPraticienVisiteur':

		$loginVisiteur=$_SESSION['loginVisiteur'];
		$leVisiteur=$pdo->getIdVisiteur($loginVisiteur);

		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];
		$idPraticien = $_POST["idPraticien"];

		$pdo->ajouterAffectation($idPraticien,$idVisiteur);

		header('Location: index.php?uc=gestionPraticiens&action=voirPraticiens');

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
