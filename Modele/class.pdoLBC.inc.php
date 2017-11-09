<?php

class PdoLBC
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=lbc';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoLBC = null;
				
	private function __construct()
	{
    		PdoLBC::$monPdo = new PDO(PdoLBC::$serveur.';'.PdoLBC::$bdd, PdoLBC::$user, PdoLBC::$mdp); 
			PdoLBC::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoLBC::$monPdo = null;
	}

	public  static function getPdoLBC()
	{
		if(PdoLBC::$monPdoLBC == null)
		{
			PdoLBC::$monPdoLBC= new PdoLBC();
		}
		return PdoLBC::$monPdoLBC;  
	}

	public function ajouterPraticien($nom, $prenom, $ville, $adresse, $cp, $notoriete, $lieuAct)
	{
		var_dump($ville);
		$req="INSERT INTO praticien(nom, prenom, ville, adresse, cp, notoriete, lieuAct) VALUES('$nom','$prenom','$ville', '$adresse', '$cp', '$notoriete', '$lieuAct')";
		echo $req;
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function getIdVisiteur($login)
	{
		$req = "SELECT * FROM visiteur WHERE loginVisiteur='$login'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	public function getMdpVisiteur($id)
	{
		$req = "SELECT mdpVisiteur FROM nonresponsable WHERE matriculeVisiteur='$id'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	public function getMdpResponsable($id)
	{
		$req = "SELECT mdpResponsable FROM responsable WHERE matriculeVisiteur='$id'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}
}
?>