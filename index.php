<?php
require_once("modele/class.pdoLBC.inc.php");

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoLBC::getPdoLBC();	 
switch($uc)
{
	case 'accueil':
		{include("controleurs/c_voirClients.php");break;}
}
?>