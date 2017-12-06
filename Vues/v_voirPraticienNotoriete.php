<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="panel panel-default">
				<table class="table">
					<tr>
						<td>Nom</td>
						<td>Prénom</td>
						<td>Notoriété</td>
						<td>Adresse</td>
						<td>Code postal</td>
						<td>Ville</td>
					</tr>
					<?php 
					 	foreach ($lesPraticiens as $unPraticien) {
					 	
					 	?>
				   <tr>
				       <td><?php echo $unPraticien["NOMPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["PRENOMPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["COEFFICIENTNOTORIETEPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["ADRESSEPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["CPPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["VILLEPRATICIEN"]?></td>
				   </tr>
					<?php 
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>