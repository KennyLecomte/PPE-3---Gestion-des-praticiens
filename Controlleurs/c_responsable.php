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
			$message="Votre nouveau praticien $prenomPraticien $nomPraticien a bien été ajouté !";
			include("vues/v_message.php");
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
			$message="Votre nouvelle spécialité $nomSpecialite a bien été ajoutée !";
			include("vues/v_message.php");
			break;
		}

		case 'recherchePraticien':
		{
			$vide=" "; 
			$reponse=$pdo->getPraticien();
			include("vues/v_recherchePraticien.php");
			break;
		}

		case 'confirmRecherchePraticien':
		{
			$nomPraticien = $_POST["nomPraticien"];
			$results=$pdo->getVisiteursPraticien($nomPraticien);
			if (empty($results))
			{
				$message="Le praticien n'a pas de visiteurs !";
				include("vues/v_message.php");
			}
			else
			{
				include("vues/v_visiteursPraticien.php");
			}
			break;
		}

		case 'rechercheVisiteur':
		{
			$vide=" ";
			$reponse=$pdo->getVisiteur();
			include("vues/v_rechercheVisiteur.php");
			break;
		}

		case 'confirmRechercheVisiteur':
		{
			$nomVisiteur = $_POST["nomVisiteur"];
			$results=$pdo->getPraticiensVisiteurNom($nomVisiteur);
			if (empty($results))
			{
				$message="Le visiteur n'a pas de praticiens !";
				include("vues/v_message.php");
			}
			else
			{
				include("vues/v_praticiensVisiteurRecherche.php");
			}
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
			if (empty($results))
			{
				$message="Il n'y a pas de visites à cette date !";
				include("vues/v_message.php");
			}
			else
			{
				include("vues/v_visitesDate.php");
			}
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
			if (empty($results))
			{
				$message="Il n'y a pas de praticiens dans cette région !";
				include("vues/v_message.php");
			}
			else
			{
				include("vues/v_praticiensRegion.php");
			}
			break;
		}

		case 'ajouterAffectation':
		{
			$praticien=$pdo->getPraticien();
			$visiteur=$pdo->getVisiteur();
			include("vues/v_ajouterAffectation.php");
			break;
		}

		case 'confirmAjoutAffectation':
		{
			$idPraticien = $_POST["idPraticien"];
			$idVisiteur = $_POST["idVisiteur"];
			$pdo->ajouterAffectation($idPraticien,$idVisiteur);
			header('Location: index.php?uc=responsable&action=voirAffectation');
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
			header('Location: index.php?uc=responsable&action=voirAffectation');
			break;
		}

		case 'vueAjouterResponsable' :
		{
			$vide=" ";
			$reponse=$pdo->getVisiteurNonResponsable();
			$secteur=$pdo->getSecteurs();
			include("vues/v_ajouterResponsable.php");
			break;
		}

		case 'confirmAjouterResponsable':
		{
			$nomVisiteur = $_POST["nomVisiteur"];
			$results=$pdo->getVisiteurNom($nomVisiteur);
			$matriculeVisiteur=$results["MATRICULEVISITEUR"];
			$idSecteur=$_POST["idSecteur"];
			$pdo->ajouterResponsable($matriculeVisiteur, $idSecteur);
			$message="Votre nouveau responsable $nomVisiteur a bien été ajouté !";
			include("vues/v_message.php");
			break;
		}
	}
?>