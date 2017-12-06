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
		$laRegionVisiteur=$pdo->getRegionVisiteur($idVisiteur);
		$regionVisiteur=$laRegionVisiteur['idRegion'];

		$idPraticien = $_POST["idPraticien"];
		$lePraticien=$pdo->getInfosPraticien($idPraticien);
		$regionPraticien=$lePraticien['IDREGION'];

		if($regionVisiteur==$regionPraticien)
		{
			$pdo->ajouterAffectation($idPraticien,$idVisiteur);
			header('Location: index.php?uc=gestionPraticiens&action=voirPraticiens');
		}
		else
		{
			echo "Vous devez être de la même région que le praticien !";
		}

		break;

	case 'supprimerAffectation':

		$loginVisiteur=$_SESSION['loginVisiteur'];
		$leVisiteur=$pdo->getIdVisiteur($loginVisiteur);
		$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

		$idPraticien=$_REQUEST['id'];

		$pdo->supprimerPraticienVisiteur($idVisiteur,$idPraticien);

		header('Location: index.php?uc=gestionPraticiens&action=voirPraticiens');

		break;
	
	default:
		
		break;


		case 'FormulairePraticien':

		$praticien=$pdo->getPraticien();
		include("vues/v_FormulairePraticien.php");
		break;

		case 'VoirInfosPraticien':

		$idPraticien = $_POST['idPraticien'];
		$infosPraticien = $pdo-> getInfosPraticien($idPraticien);
		$lesVisiteurs = $pdo-> getLesVisiteursDuPraticien($idPraticien);
		$lesDates = $pdo-> getDernieresDatesVisites($idPraticien);
		include("vues/v_voirPraticien.php");
		break;


		case 'RechercheNotoriete':

		$lesPraticiens = $pdo-> getPraticienParNotoriete();
		include("vues/v_voirPraticienNotoriete.php");
		break;

		case 'RechercheSpecialite':

		$lesPraticiens = $pdo-> getPraticienParSpecialite();
		include("vues/v_voirPraticienSpecialite.php");
		break;
}

?>
