<table border="collapse">
	<?php 
	 	foreach ($affectations as $uneLigne) {
	 	
	 	?>
   <tr>
       <td><?php echo $uneLigne["NOMPRATICIEN"] . " " . $uneLigne["PRENOMPRATICIEN"] ?></td>
       <td><?php echo $uneLigne["PRENOMVISITEUR"] . " " . $uneLigne["PRENOMVISITEUR"]?></td>
       <td><a href="index.php?uc=affectation&action=supprimerAffectation"><img src="Images/croix.png" width="30" height= "30" alt="supprimer affectation"/></a>
   </tr></td>

	<?php 
	}
	?>
</table>