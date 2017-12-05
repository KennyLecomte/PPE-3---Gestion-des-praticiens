<table border="collapse">
	<?php 
	 	foreach ($lesPraticiens as $unPraticien) {
	 	
	 	?>
   <tr>
       <td><?php echo $unPraticien["NOMPRATICIEN"] . " | " . $unPraticien["PRENOMPRATICIEN"] . " | " . $unPraticien["LIBELLESPECIALITE"] ?></td>
   </tr>
	<?php 
	}
	?>
</table>