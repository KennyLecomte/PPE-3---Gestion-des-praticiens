<table border="collapse">
	<?php 
	 	foreach ($affectations as $uneLigne) {
	 	
	 	?>
   <tr>
       <td><?php echo $uneLigne["IDPRATICIEN"] ?></td>
       <td><?php echo $uneLigne["MATRICULEVISITEUR"]?></td>
       
   </tr>
	<?php 
	}
	?>
</table>