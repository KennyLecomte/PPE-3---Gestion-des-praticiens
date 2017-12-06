<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<table class="table">
					<tr>
	                        <td>Praticien</td>
	                	    <td>Visiteur</td>
	                	    <td></td>
	                    </tr> 
					<?php 
					 	foreach ($affectations as $uneLigne) { 	
					 	?>
				   		<tr>
				       		<td><?php echo $uneLigne["NOMPRATICIEN"] . " " . $uneLigne["PRENOMPRATICIEN"] ?></td>
				       		<td><?php echo $uneLigne["NOMVISITEUR"] . " " . $uneLigne["PRENOMVISITEUR"]?></td>
					      	<td><a href="index.php?uc=affectation&action=supprimerAffectation&idVisiteur=<?php echo $uneLigne["MATRICULEVISITEUR"]?>&idPraticien=<?php echo $uneLigne["IDPRATICIEN"]?>"><img src="Images/croix.png" width="30" height= "30" alt="supprimer affectation"/></a></td>
				  		</tr>
					<?php 
					}
					?>
					
					</table>
					</a>
				</div>
				<a href="index.php?uc=affectation&action=vueAjouterAffectation" class="btn btn-lg btn-primary btn-block"> Ajouter une affectation</a>
			</div>
	</div>
</div>
