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

$reponse=$pdo->getResponsable($idVisiteur);
$responsable=$reponse['responsable'];

if($mdp==$mdpVisiteur)
{
	$_SESSION['idVisiteur']=$leVisiteur['MATRICULEVISITEUR'];
	$_SESSION['nomVisiteur']=$leVisiteur['NOMVISITEUR'];
	$_SESSION['prenomVisiteur']=$leVisiteur['PRENOMVISITEUR'];
	$_SESSION['loginVisiteur']=$leVisiteur['LOGINVISITEUR'];

	var_dump($responsable);

	if($responsable==1)
	{
		$_SESSION['typeVisiteur']="Responsable";
	}
	else if($responsable==0)
	{
		$_SESSION['typeVisiteur']="Visiteur";
	}
	
}

header('Location: index.php?uc=accueil');	

?>
