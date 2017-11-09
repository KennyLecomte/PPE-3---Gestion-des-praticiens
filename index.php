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

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'connexion' :
		{include("Controlleurs/c_Connexion.php");break;}
	case 'deconnexion' :
		{include("Controlleurs/c_Deconnexion.php");break;}
}
?>