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
	/*case 'confirmCreationClient':
	{
		$prenom = $_REQUEST['prenom'];
		$nom = $_REQUEST['nom'];
		$adresse = $_REQUEST['adresse'];
		$telephone = $_REQUEST['telephone'];
		$ville = $_REQUEST['ville'];
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['motdepasse'];
		$requeteClient = $pdo->creerClient($prenom, $nom, $telephone, $adresse, $ville, $login, $mdp);
		header("Location: index.php?uc=gererCompte&action=choixCompte");
	  	break;

	}*/
}
?>