<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="panel panel-default">
				<table class="table">
					<tr>
						<td>Nom Visiteur</td>
						<td>Prénom Visiteur</td>
					</tr>
					<?php 
					 	foreach ($lesVisiteurs as $unVisiteur) {
					 	
					 	?>
				   <tr>
				       <td><?php echo $unVisiteur["NOMVISITEUR"]?></td>
				       <td><?php echo $unVisiteur["PRENOMVISITEUR"]?></td>
				   </tr>
					<?php 
					}
					?>
				</table>
			</div>
				<br>
				<div class="panel panel-default">
				<table class="table">
					<tr>
						<td>Date de Visite</td>
					</tr>
					<?php 
					 	foreach ($lesDates as $uneDate) {
					 	
					 	?>
				   <tr>
				       <td><?php echo $uneDate["DATEVISITE"]?></td>
				   </tr>
					<?php 
					}
					?>
				</table>


			</div>
		</div>
	</div>
</div>