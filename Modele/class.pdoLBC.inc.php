﻿<?php

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

	public function getPraticiensVisiteurNom($nomVisiteur)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMVISITEUR, PRENOMVISITEUR FROM praticien, attribuer, visiteur WHERE attribuer.idPraticien=praticien.idPraticien AND attribuer.matriculeVisiteur=visiteur.matriculeVisiteur AND nomVisiteur='$nomVisiteur'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getVisiteursPraticien($nomPraticien)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMVISITEUR, PRENOMVISITEUR FROM praticien, attribuer, visiteur WHERE attribuer.idPraticien=praticien.idPraticien AND attribuer.matriculeVisiteur=visiteur.matriculeVisiteur AND nomPraticien='$nomPraticien'";
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
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function getAffectations(){
		$req = "SELECT * FROM attribuer, praticien, visiteur
		WHERE praticien.idPraticien=attribuer.idPraticien
		AND visiteur.matriculeVisiteur=attribuer.matriculeVisiteur";
		$res = PdoLBC::$monPdo->query($req);
		return $res;
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

	public function getInfosPraticien($idPraticien)
  	{
	    $req = "SELECT * FROM praticien WHERE idPraticien='$idPraticien'";
	    $res = PdoLBC::$monPdo->query($req);
	    $lePraticien = $res->fetch();
	    return $lePraticien;
 	}

 	public function getRegionVisiteur($idVisiteur)
  	{
	    $req = "SELECT idRegion FROM travailler WHERE matriculeVisiteur='$idVisiteur'";
	    $res = PdoLBC::$monPdo->query($req);
	    $laRegion = $res->fetch();
	    return $laRegion;
 	}

 	public function supprimerPraticienVisiteur($idVisiteur,$idPraticien)
	{
		$req="DELETE FROM attribuer WHERE matriculeVisiteur='$idVisiteur' AND idPraticien='$idPraticien'";
		echo $req;
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function ajouterSpecialite($idSpecialite, $nomSpecialite)
	{	
		$req="INSERT INTO specialite VALUES('$idSpecialite', '$nomSpecialite')";
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function getVisitesDate($dateVisite)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMVISITEUR, PRENOMVISITEUR, dateVisite, bilanVisite, motifVisite FROM praticien, visite, visiteur WHERE visite.idPraticien=praticien.idPraticien AND visite.matriculeVisiteur=visiteur.matriculeVisiteur AND dateVisite='$dateVisite'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getPraticiensRegion($idRegion)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMREGION FROM praticien, region WHERE region.idRegion=praticien.idRegion AND praticien.idRegion='$idRegion'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
}
?>