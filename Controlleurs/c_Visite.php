<?php
$action = $_REQUEST['action'];

switch($action)
{
	case 'formulaireVisite':
	{
		include("vues/v_formulaireVisite.php");
	  	break;
	}
	case 'formulaireCompte':
	{
		include("vues/v_formulaireCompte.php");
	  	break;
	}
	
	case 'confirmerVisite':
	{

	  	$idPraticien=$_POST['idPraticien'];
	  	$dateVisite=$_POST['dateVisite'];
	  	$bilanVisite=$_POST['bilanVisite'];
	  	$motifVisite=$_POST['motifVisite'];
		$loginVisiteur=$_SESSION['loginVisiteur'];

		$Visiteur=$pdo->getIdVisiteur($loginVisiteur);
		$IdVisiteur=$Visiteur['MATRICULEVISITEUR'];

		var_dump($IdVisiteur);
		$pdo->getSallesAvecNom($idPraticien, $matriculeVisiteur, $dateVisite, $bilanVisite, $motifVisite);
		include("vues/index.php?uc=accueil");
		break;
	}
}
?>