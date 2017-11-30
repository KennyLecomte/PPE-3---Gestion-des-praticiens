<?php
$action = $_REQUEST['action'];



switch($action)
{
	case 'formulaireVisite':
	{
		$praticien=$pdo->getPraticien();
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
		$matriculeVisiteur=$Visiteur['MATRICULEVISITEUR'];

		$pdo->ajoutVisite($idPraticien, $matriculeVisiteur, $dateVisite, $bilanVisite, $motifVisite);
		header('Location: index.php?uc=accueil');
		break;
	}
}
?>