<?php
$action=$_REQUEST['action'];

switch ($action) {
	case 'voirPraticiens':

		$loginVisiteur=$_SESSION['loginVisiteur'];

		$leVisiteur=$pdo->getVisiteurLogin($loginVisiteur);

		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

		$lesPraticiens=$pdo->getPraticiensVisiteur($idVisiteur);

		include("vues/v_PraticiensVisiteur.php");

		break;

	case 'ajoutAffectationVisiteur':

		$leVisiteur=$pdo->getRegionVisiteur($_SESSION['idVisiteur']);
		$regionVisiteur=$leVisiteur['idRegion'];

		$praticien=$pdo->getPraticiensRegionSelect($regionVisiteur);

		include("vues/v_ajoutAffectationVisiteur.php");

		break;

	case 'confirmAjoutAffectationVisiteur':

		$loginVisiteur=$_SESSION['loginVisiteur'];
		$leVisiteur=$pdo->getVisiteurLogin($loginVisiteur);

		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];
		$laRegionVisiteur=$pdo->getRegionVisiteur($idVisiteur);
		$regionVisiteur=$laRegionVisiteur['idRegion'];

		$idPraticien = $_POST["idPraticien"];
		$lePraticien=$pdo->getInfosPraticien($idPraticien);
		$regionPraticien=$lePraticien['IDREGION'];

		if($regionVisiteur==$regionPraticien)
		{
			$pdo->ajouterAffectation($idPraticien,$idVisiteur);
			header('Location: index.php?uc=visiteur&action=voirPraticiens');
		}
		else
		{
			echo "Vous devez être de la même région que le praticien !";
		}

		break;

	case 'supprimerAffectation':

		$loginVisiteur=$_SESSION['loginVisiteur'];
		$leVisiteur=$pdo->getVisiteurLogin($loginVisiteur);
		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

		$idPraticien=$_REQUEST['id'];

		$pdo->supprimerPraticienVisiteur($idVisiteur,$idPraticien);

		header('Location: index.php?uc=visiteur&action=voirPraticiens');

		break;

		case 'recherchePraticien':

		$praticien=$pdo->getPraticien();
		include("vues/v_FormulairePraticien.php");
		break;

		case 'voirInfosPraticien':

		$idPraticien = $_POST['idPraticien'];
		$infosPraticien = $pdo-> getInfosPraticien($idPraticien);
		$lesVisiteurs = $pdo-> getLesVisiteursDuPraticien($idPraticien);
		$lesDates = $pdo-> getDernieresDatesVisites($idPraticien);
		include("vues/v_voirPraticien.php");
		break;


		case 'rechercheNotoriete':

		$lesPraticiens = $pdo-> getPraticienParNotoriete();
		include("vues/v_voirPraticienNotoriete.php");
		break;

		case 'rechercheSpecialite':

		$lesPraticiens = $pdo-> getPraticienParSpecialite();
		include("vues/v_voirPraticienSpecialite.php");
		break;

		case 'ajouterVisite':
	{
		$praticiens=$pdo->getPraticiensVisiteur($_SESSION['idVisiteur']);
		include("vues/v_formulaireVisite.php");
	  	break;
	}
	case 'formulaireCompte':
	{
		include("vues/v_formulaireCompte.php");
	  	break;
	}
	
	case 'confirmAjoutVisite':
	{

	  	$idPraticien=$_POST['idPraticien'];
	  	$dateVisite=$_POST['dateVisite'];
	  	$bilanVisite=$_POST['bilanVisite'];
	  	$motifVisite=$_POST['motifVisite'];
		$loginVisiteur=$_SESSION['loginVisiteur'];

		$Visiteur=$pdo->getVisiteurLogin($loginVisiteur);
		$matriculeVisiteur=$Visiteur['MATRICULEVISITEUR'];

		$pdo->ajoutVisite($idPraticien, $matriculeVisiteur, $dateVisite, $bilanVisite, $motifVisite);
		header('Location: index.php?uc=accueil');
		break;
	}
}

?>
