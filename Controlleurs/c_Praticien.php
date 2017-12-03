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
		case 'vueAjouterPraticien':
		{
			$reponse=$pdo->getRegion();
			include("vues/v_ajoutPraticien.php");
			break;
		}

		case 'ajouterPraticien':
		{
			$idRegion=$_POST["idRegion"];


			$nomPraticien=$_POST["nomPraticien"];
			$prenomPraticien = $_POST["prenomPraticien"];
			$villePraticien = $_POST["villePraticien"];
			$cpPraticien=$_POST["cpPraticien"];
			$adressePraticien=$_POST["adressePraticien"];
			$notorietePraticien=$_POST["notorietePraticien"];
			$pdo->ajouterPraticien($idRegion, $nomPraticien, $prenomPraticien, $villePraticien, $adressePraticien, $cpPraticien, $notorietePraticien);
			break;
		}

		case 'ajouterSpecialite':
		{
			include("vues/v_ajoutSpecialite.php");
			break;
		}

		case 'confirmAjoutSpecialite':
		{
			$idSpecialite=$_POST["idSpecialite"];
			$nomSpecialite = $_POST["nomSpecialite"];
			$pdo->ajouterSpecialite($idSpecialite, $nomSpecialite);
			echo "Votre nouvelle spécialité '$nomSpecialite' a bien été ajoutée !";
			break;
		}

		case 'recherchePraticien':
		{
			include("vues/v_recherchePraticien.php");
			break;
		}

		case 'confirmRecherchePraticien':
		{
			$nomPraticien = $_POST["nomPraticien"];
			$results=$pdo->getVisiteursPraticien($nomPraticien);
			include("vues/v_visiteursPraticien.php");
			break;
		}

		case 'rechercheVisiteur':
		{
			include("vues/v_rechercheVisiteur.php");
			break;
		}

		case 'confirmRechercheVisiteur':
		{
			$nomVisiteur = $_POST["nomVisiteur"];
			$results=$pdo->getPraticiensVisiteurNom($nomVisiteur);
			include("vues/v_praticiensVisiteurRecherche.php");
			break;
		}

		case 'rechercheDate':
		{
			include("vues/v_rechercheDate.php");
			break;
		}

		case 'confirmRechercheDate':
		{
			$dateVisite = $_POST["dateVisite"];
			$results=$pdo->getVisitesDate($dateVisite);
			include("vues/v_visitesDate.php");
			break;
		}

		case 'rechercheRegion':
		{
			$reponse=$pdo->getRegion();
			include("vues/v_rechercheRegion.php");
			break;
		}

		case 'confirmRechercheRegion':
		{
			$idRegion = $_POST["idRegion"];
			$results=$pdo->getPraticiensRegion($idRegion);
			include("vues/v_praticiensRegion.php");
			break;
		}
	}
?>