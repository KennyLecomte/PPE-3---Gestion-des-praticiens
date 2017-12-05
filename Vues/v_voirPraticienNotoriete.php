<table border="collapse">
	<?php 
	 	foreach ($lesPraticiens as $unPraticien) {
	 	
	 	?>
   <tr>
       <td><?php echo $unPraticien["NOMPRATICIEN"] . " | " . $unPraticien["PRENOMPRATICIEN"] . " | " . $unPraticien["COEFFICIENTNOTORIETEPRATICIEN"] . " | " . $unPraticien["ADRESSEPRATICIEN"] . " | " . $unPraticien["CPPRATICIEN"] . " | " . $unPraticien["VILLEPRATICIEN"] ?></td>
   </tr>
	<?php 
	}
	?>
</table>