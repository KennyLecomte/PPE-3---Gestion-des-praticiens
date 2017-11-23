<?php
	if(isset($_REQUEST['action']))
	{
		$action=$_REQUEST['action'];
	}
	else
	{
		$action=NULL;
	}

var_dump($action);
	switch ($action) {
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
	
	}
?>