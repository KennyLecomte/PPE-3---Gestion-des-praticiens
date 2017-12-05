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
			
			if($_SESSION['typeVisiteur']=="Responsable")
			{
				$praticien=$pdo->getPraticien();
				$visiteur=$pdo->getVisiteur();
				include("vues/v_ajouterAffectation.php");
			}

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
			$idVisiteur=$_REQUEST['idVisiteur'];
			$idPraticien=$_REQUEST['idPraticien'];
			$pdo->supprimerPraticienVisiteur($idVisiteur,$idPraticien);
			header('Location: index.php?uc=affectation&action=voirAffectation');
			break;
		}




	}