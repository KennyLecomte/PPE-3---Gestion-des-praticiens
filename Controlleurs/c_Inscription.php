<?php

$action=$_REQUEST['action'];

switch ($action) {

	case 'inscription':

		include("vues/v_champInscription.php");
		break;

	case 'confirmInscription':

		$matriculeVisiteur=$_POST['matriculeVisiteur'];
		$nomVisiteur=$_POST['nomVisiteur'];
		$prenomVisiteur=$_POST['prenomVisiteur'];
		$adresseVisiteur=$_POST['adresseVisiteur'];
		$villeVisiteur=$_POST['villeVisiteur'];
		$cpVisiteur=$_POST['cpVisiteur'];
		$dateEmbaucheVisiteur=$_POST['dateEmbaucheVisiteur'];
		$mdpVisiteur=$_POST['mdpVisiteur'];

		$pdo->ajouterVisiteur($matriculeVisiteur,$nomVisiteur,$prenomVisiteur,$adresseVisiteur,$villeVisiteur,$cpVisiteur,$dateEmbaucheVisiteur,$mdp);

		header('Location: index.php?uc=accueil');	
		break;
}
?>
