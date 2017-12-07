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
		$req="INSERT INTO praticien(IDREGION, NOMPRATICIEN, PRENOMPRATICIEN, ADRESSEPRATICIEN, CPPRATICIEN, VILLEPRATICIEN, COEFFICIENTNOTORIETEPRATICIEN) VALUES('$idRegion', '$nomPraticien','$prenomPraticien','$adressePraticien', '$cpPraticien','$villePraticien', '$notorietePraticien')";
		
		$res = PdoLBC::$monPdo->exec($req);
	}

	public function getVisiteurLogin($login)
	{
		$req = "SELECT * FROM visiteur WHERE loginVisiteur='$login'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	public function getMdpVisiteur($id)
	{
		$req = "SELECT mdpVisiteur FROM visiteur WHERE matriculeVisiteur='$id'";
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
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMVISITEUR, PRENOMVISITEUR FROM praticien, attribuer, visiteur WHERE attribuer.idPraticien=praticien.idPraticien AND attribuer.matriculeVisiteur=visiteur.matriculeVisiteur AND CONCAT(NOMVISITEUR, ' ',PRENOMVISITEUR)='$nomVisiteur'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getVisiteurNom($nomVisiteur)
	{
		$req = "SELECT * FROM visiteur WHERE CONCAT(NOMVISITEUR, ' ',PRENOMVISITEUR)='$nomVisiteur'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	public function getVisiteursPraticien($nomPraticien)
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, NOMVISITEUR, PRENOMVISITEUR FROM praticien, attribuer, visiteur WHERE attribuer.idPraticien=praticien.idPraticien AND attribuer.matriculeVisiteur=visiteur.matriculeVisiteur AND CONCAT(NOMPRATICIEN, ' ',PRENOMPRATICIEN)='$nomPraticien'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function ajouterVisiteur($matricule,$nom,$prenom,$adresse,$ville,$cp,$dateEmbauche,$login,$region,$mdp)
	{
		$req="INSERT INTO visiteur(matriculeVisiteur, nomVisiteur, prenomVisiteur, adresseVisiteur, cpVisiteur, villeVisiteur, dateEmbaucheVisiteur, mdpVisiteur, loginVisiteur) VALUES('$matricule','$nom','$prenom', '$adresse', '$cp', '$ville', '$dateEmbauche','$mdp','$login')";
		$res = PdoLBC::$monPdo->exec($req);

		$req="INSERT INTO travailler(matriculeVisiteur, idRegion, dateTravail) VALUES('$matricule','$region','$dateEmbauche')";
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

	public function getLesVisiteursDuPraticien($idPraticien)
	{
		$req = "SELECT visiteur.NOMVISITEUR, visiteur.PRENOMVISITEUR FROM `praticien`, `visiteur`, `attribuer` 
				WHERE praticien.IDPRATICIEN = attribuer.IDPRATICIEN
				AND visiteur.MATRICULEVISITEUR = attribuer.MATRICULEVISITEUR
				AND praticien.IDPRATICIEN = '$idPraticien'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getDernieresDatesVisites($idPraticien)
	{
		$req = "SELECT visite.DATEVISITE FROM `visite`, `praticien`, `visiteur`
				WHERE visiteur.MATRICULEVISITEUR = visite.MATRICULEVISITEUR
				AND praticien.IDPRATICIEN = visite.IDPRATICIEN
				AND praticien.IDPRATICIEN = '$idPraticien'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getPraticienParNotoriete()
	{
		$req = "SELECT * FROM praticien ORDER BY `COEFFICIENTNOTORIETEPRATICIEN` DESC";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}


	public function getPraticienParSpecialite()
	{
		$req = "SELECT NOMPRATICIEN, PRENOMPRATICIEN, LIBELLESPECIALITE FROM praticien, specialiser, specialite WHERE praticien.IDPRATICIEN = specialiser.IDPRATICIEN AND specialiser.IDSPECIALITE = specialite.IDSPECIALITE ORDER BY specialite.LIBELLESPECIALITE";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getResponsable($idVisiteur)
	{
		$req = "SELECT COUNT(*) AS responsable FROM responsable WHERE matriculeVisiteur='$idVisiteur'";
		$res = PdoLBC::$monPdo->query($req);
		$lesLignes = $res->fetch();
		return $lesLignes;
	}

	public function getSecteurs()
	{
		$req = "SELECT * FROM secteur";
	    $res = PdoLBC::$monPdo->query($req);
	    return $res;
	}

	public function ajouterResponsable($matriculeVisiteur, $idSecteur)
	{
		$req="INSERT INTO responsable(MATRICULEVISITEUR, IDSECTEUR) VALUES('$matriculeVisiteur', '$idSecteur')";
		$res = PdoLBC::$monPdo->exec($req);
	}
}
?>