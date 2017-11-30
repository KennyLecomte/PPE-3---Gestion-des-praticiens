<?php

session_start();

require_once("modele/class.pdoLBC.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

if(!isset($_SESSION['idVisiteur']))
{
	include("vues/v_ChampConnexion.php");
}
else
{
	include("vues/v_InformationsConnexion.php");
}

if(isset($_SESSION['idVisiteur']))
{
	if($_SESSION['typeVisiteur']=="Visiteur")
	{
		include("Vues/v_visiteur.php");
	}
	elseif ($_SESSION['typeVisiteur']=="Responsable") 
	{
		include("Vues/v_responsable.php");
	}
}

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}		
	case 'praticien' :
		{include("Controlleurs/c_Praticien.php");break;}
	case 'connexion' :
		{include("Controlleurs/c_Connexion.php");break;}
	case 'deconnexion' :
		{include("Controlleurs/c_Deconnexion.php");break;}
	case 'ajoutVisite' :
		{include("Controlleurs/c_Visite.php");break;}
	case 'inscription' :
		{ include("Controlleurs/c_Inscription.php");break; }
	case 'gestionPraticiens' :
		{ include("Controlleurs/c_gestionPraticiens.php");break; }
	case 'affectation' :
		{ include("Controlleurs/c_Affectation.php");break; }


}
?>