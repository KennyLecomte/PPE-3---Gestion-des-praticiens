<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="panel panel-default">
				<table class="table">
					<tr>
						<td>Nom</td>
						<td>Prénom</td>
						<td>Spécialité</td>
					</tr>
					<?php 
					 	foreach ($lesPraticiens as $unPraticien) {
					 	
					 	?>
				   <tr>
				       <td><?php echo $unPraticien["NOMPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["PRENOMPRATICIEN"]?></td>
				       <td><?php echo $unPraticien["LIBELLESPECIALITE"]?></td>
				   </tr>
					<?php 
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>