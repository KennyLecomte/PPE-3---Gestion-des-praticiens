<table border="collapse">
	<?php 
	 	foreach ($affectations as $uneLigne) {
	 	
	 	?>
   <tr>
       <td><?php echo $uneLigne["NOMPRATICIEN"] . " " . $uneLigne["PRENOMPRATICIEN"] ?></td>
       <td><?php echo $uneLigne["NOMVISITEUR"] . " " . $uneLigne["PRENOMVISITEUR"]?></td>
	      
	   <td><a href="index.php?uc=affectation&action=supprimerAffectation&idVisiteur=<?php echo $uneLigne["MATRICULEVISITEUR"]?>&idPraticien=<?php echo $uneLigne["IDPRATICIEN"]?>"><img src="Images/croix.png" width="30" height= "30" alt="supprimer affectation"/></a>
       </td>
   </tr>



	<?php 
	}
	?>

	 <a href="index.php?uc=affectation&action=vueAjouterAffectation" class="inscription"> Ajouter une affectation</a>	
</table>