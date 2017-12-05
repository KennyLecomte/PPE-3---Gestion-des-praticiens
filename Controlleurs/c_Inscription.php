<?php

$action=$_REQUEST['action'];

switch ($action) {

	case 'inscription':
		$reponse=$pdo->getRegion();
		include("vues/v_champInscription.php");
		break;

	case 'confirmInscription':

		$matriculeVisiteur=$_POST['matriculeVisiteur'];
		$nomVisiteur=$_POST['nomVisiteur'];
		$prenomVisiteur=$_POST['prenomVisiteur'];
		$adresseVisiteur=$_POST['adresseVisiteur'];
		$villeVisiteur=$_POST['villeVisiteur'];
		$cpVisiteur=$_POST['cpVisiteur'];
		$regionVisiteur=$_POST['regionVisiteur'];
		$dateEmbaucheVisiteur=$_POST['dateEmbaucheVisiteur'];
		$mdpVisiteur=$_POST['mdpVisiteur'];

		$lettrePrenom=substr($prenomVisiteur, 0, 1);

		$loginVisiteur=$nomVisiteur.$lettrePrenom;

		$pdo->ajouterVisiteur($matriculeVisiteur,$nomVisiteur,$prenomVisiteur,$adresseVisiteur,$villeVisiteur,$cpVisiteur,$dateEmbaucheVisiteur,$loginVisiteur,$regionVisiteur,$mdpVisiteur);

		header('Location: index.php?uc=accueil');	
		break;
}
?>
