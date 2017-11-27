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

	public function ajouterPraticien($idRegion, $nomPraticien, $prenomPraticien, $villePraticien, $adressePraticien, $cpPraticien, $notorietePraticien)
	{
	var_dump($idRegion);
	var_dump($nomPraticien);
var_dump($prenomPraticien);
var_dump($villePraticien);
var_dump($adressePraticien);
var_dump($cpPraticien);
var_dump($notorietePraticien);
		

		$req="INSERT INTO praticien(IDREGION, NOMPRATICIEN, PRENOMPRATICIEN, ADRESSEPRATICIEN, CPPRATICIEN, VILLEPRATICIEN, COEFFICIENTNOTORIETEPRATICIEN) VALUES('$idRegion', '$nomPraticien','$prenomPraticien','$adressePraticien', '$cpPraticien','$villePraticien', '$notorietePraticien')";
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

	public function getPraticiensVisiteur($id)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, praticien.idPraticien as 'IDPRATICIEN' FROM praticien, attribuer WHERE attribuer.idPraticien=praticien.idPraticien AND attribuer.matriculeVisiteur='$id'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function ajouterVisiteur($matricule,$nom,$prenom,$adresse,$ville,$cp,$dateEmbauche,$login)
	{
		$req="INSERT INTO visiteur(matriculeVisiteur, nomVisiteur, prenomVisiteur, adresseVisiteur, cpVisiteur, villeVisiteur, dateEmbaucheVisiteur, loginVisiteur) VALUES('$matricule','$nom','$prenom', '$adresse', '$cp', '$ville', '$dateEmbauche','$login')";
		echo $req;
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function ajoutVisite($idPraticien,$matriculeVisiteur,$dateVisite,$bilanVisite,$motifVisite)
	{
	   	$req="INSERT INTO visite(IDPRATICIEN, MATRICULEVISITEUR, DATEVISITE, BILANVISITE, MOTIFVISITE) VALUES('$idPraticien','$matriculeVisiteur','$dateVisite', '$bilanVisite', '$motifVisite')";
		$res = PdoLBC::$monPdo->exec($req);
 	}

 	public function getPraticien()
  	{
	    $req = "SELECT * FROM praticien";
	    $res = PdoLBC::$monPdo->query($req);
	    return $res;
 	}

 	public function getVisiteur()
  	{
	    $req = "SELECT * FROM visiteur";
	    $res = PdoLBC::$monPdo->query($req);
	    return $res;
 	}

 	public function ajouterAffectation($idPraticien, $idVisiteur){
		$req="INSERT INTO attribuer(IDPRATICIEN, MATRICULEVISITEUR) VALUES('$idPraticien','$idVisiteur')";
		echo $req;
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function getRegion()
  	{
	    $req = "SELECT * FROM region";
	    $res = PdoLBC::$monPdo->query($req);
	    return $res;
 	}

 	public function ajoutVisiteur($matricule,$nom,$prenom,$adresse,$ville,$cp,$dateEmbauche,$mdp)
	{
		$req="INSERT INTO visiteur(matriculeVisiteur, prenomVisiteur, adresseVisiteur, cpVisiteur, villeVisiteur, dateEmbaucheVisiteur, loginVisiteur) VALUES('$nom','$prenom','$ville', '$adresse', '$cp', '$notoriete', '$lieuAct')";
		echo $req;
		$res = PdoLBC::$monPdo->exec($req);
	}
}
?>