<?php
	if(isset($_REQUEST['action']))
	{
		$action=$_REQUEST['action'];
	}
	else
	{
		$action=NULL;
	}
switch ($action) {
		case 'vueAjouterAffectation':
		{
			$praticien=$pdo->getPraticien();
			$visiteur=$pdo->getVisiteur();
			include("vues/v_ajouterAffectation.php");
			break;
		}

		case 'ajouterAffectation':
		{
			$idPraticien = $_POST["idPraticien"];
			$idVisiteur = $_POST["idVisiteur"];
			$pdo->ajouterAffectation($idPraticien,$idVisiteur);
			break;
		}

		case 'voirAffectation':
		{
			$affectations=$pdo->getAffectations();
			include("vues/v_voirAffectation.php");
			break;
		}

		case 'supprimerAffectation':
		{
			include("vues/v_Accueil.php");
			break;
		}

	}