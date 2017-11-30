<table border="collapse">
	<?php 
	 	foreach ($affectations as $uneLigne) {
	 	
	 	?>
   <tr>
       <td><?php echo $uneLigne["NOMPRATICIEN"] . " " . $uneLigne["PRENOMPRATICIEN"] ?></td>
       <td><?php echo $uneLigne["PRENOMVISITEUR"] . " " . $uneLigne["PRENOMVISITEUR"]?></td>
       
   </tr>
	<?php 
	}
	?>
</table>