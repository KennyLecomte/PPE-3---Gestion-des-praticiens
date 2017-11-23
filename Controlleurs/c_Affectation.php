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

		case 'confirmAjouterAffectation':
		{
			$pdo->ajouterAffectation($idPraticien,$idVisiteur);
			break;
		}

	}