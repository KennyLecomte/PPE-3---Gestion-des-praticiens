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

	}