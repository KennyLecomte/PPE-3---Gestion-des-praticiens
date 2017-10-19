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
			$nom=$_POST["nom"];
			$prenom = $_POST["prenom"];
			$ville = $_POST["ville"];
			$cp=$_POST["cp"];
			$adresse=$_POST["adresse"];
			$notoriete=$_POST["notoriete"];
			$lieuAct=$_POST["lieuAct"];		
			var_dump($nom);
			$pdo->ajouterPraticien($nom, $prenom, $ville, $adresse, $cp, $notoriete, $lieuAct);
			break;
		}
		
	
	}
?>