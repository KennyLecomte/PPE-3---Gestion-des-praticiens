<?php
if(isset($_SESSION['idVisiteur'])){

?>
	<a href="index.php?uc=ajoutVisite&action=formulaireVisite"> Formulaire Visite </a>
	<a href="index.php?uc=gestionPraticiens&action=voirPraticiens"> Voir les praticiens </a>
<?php
}
?>