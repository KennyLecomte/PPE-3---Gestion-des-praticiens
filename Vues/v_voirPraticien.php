<table border="collapse">
	<?php 
	 	foreach ($lesVisiteurs as $uneVisiteur) {
	 	
	 	?>
   <tr>
       <td><?php echo $uneVisiteur["NOMVISITEUR"] . " " . $uneVisiteur["PRENOMVISITEUR"] ?></td>
   </tr>



	<?php 
	}
	?>

	<br>
   <label>Dernière visite le: </label>
   <?php 
	echo $dateDerniereVisite;
	?>

</table>