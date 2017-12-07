<?php

session_start();

require_once("modele/class.pdoLBC.inc.php");

include("vues/v_entete.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

if(!isset($_SESSION['idVisiteur']))
{
	include("vues/v_ChampConnexion.php");
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
		{
			if(isset($_SESSION['idVisiteur']))
			{
				include("vues/v_accueil.php");
				break;
			}
		}		
	case 'responsable' :
		{include("Controlleurs/c_responsable.php");break;}
	case 'connexion' :
		{include("Controlleurs/c_connexion.php");break;}
	case 'deconnexion' :
		{include("Controlleurs/c_Deconnexion.php");break;}
	case 'inscription' :
		{ include("Controlleurs/c_Inscription.php");break; }
	case 'visiteur' :
		{ include("Controlleurs/c_visiteur.php");break; }


}
?>