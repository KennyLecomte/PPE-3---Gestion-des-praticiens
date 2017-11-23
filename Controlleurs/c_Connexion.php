<?php

if(empty($_POST['loginConnexion']))
{
	$login=NULL;
}
else
{
	$login=$_POST['loginConnexion'];
}

if(empty($_POST['mdpConnexion']))
{
	$mdp=NULL;
}
else
{
	$mdp=$_POST['mdpConnexion'];
}

$leVisiteur=$pdo->getIdVisiteur($login);

$idVisiteur=$leVisiteur['MATRICULEVISITEUR'];

$mdpVisiteur=$pdo->getMdpVisiteur($idVisiteur);
$mdpVisiteur=$mdpVisiteur['mdpVisiteur'];
$mdpResponsable=$pdo->getMdpResponsable($idVisiteur);
$mdpResponsable=$mdpResponsable['mdpResponsable'];

if($mdp==$mdpVisiteur)
{
	$_SESSION['idVisiteur']=$leVisiteur['MATRICULEVISITEUR'];
	$_SESSION['nomVisiteur']=$leVisiteur['NOMVISITEUR'];
	$_SESSION['prenomVisiteur']=$leVisiteur['PRENOMVISITEUR'];
	$_SESSION['loginVisiteur']=$leVisiteur['LOGINVISITEUR'];
}
else if($mdp==$mdpResponsable)
{
	$_SESSION['idVisiteur']=$leVisiteur['MATRICULEVISITEUR'];
	$_SESSION['nomVisiteur']=$leVisiteur['NOMVISITEUR'];
	$_SESSION['prenomVisiteur']=$leVisiteur['PRENOMVISITEUR'];
	$_SESSION['loginVisiteur']=$leVisiteur['LOGINVISITEUR'];
}

header('Location: index.php?uc=accueil');	

?>
