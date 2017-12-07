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
	include("vues/v_champConnexion.php");
}

if(isset($_SESSION['idVisiteur']))
{
	if($_SESSION['typeVisiteur']=="Visiteur")
	{
		include("vues/v_visiteur.php");
	}
	elseif ($_SESSION['typeVisiteur']=="Responsable") 
	{
		include("vues/v_responsable.php");
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
		{include("controlleurs/c_responsable.php");break;}
	case 'connexion' :
		{include("controlleurs/c_connexion.php");break;}
	case 'deconnexion' :
		{include("controlleurs/c_deconnexion.php");break;}
	case 'inscription' :
		{ include("controlleurs/c_inscription.php");break; }
	case 'visiteur' :
		{ include("controlleurs/c_visiteur.php");break; }


}
?>