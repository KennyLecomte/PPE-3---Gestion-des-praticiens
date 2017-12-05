<div class="container">
	<div class="row">
		<div class="col-md-8">	
			<div class="col-md-8">
				<table border="collapse" class="table table-bordered table-striped">
				<?php 
				 	foreach ($affectations as $uneLigne) { 	
				 	?>
			   <tr>
			       <td><?php echo $uneLigne["NOMPRATICIEN"] . " " . $uneLigne["PRENOMPRATICIEN"] ?></td>
			       <td><?php echo $uneLigne["NOMVISITEUR"] . " " . $uneLigne["PRENOMVISITEUR"]?></td>
				      
				   <td><a href="index.php?uc=affectation&action=supprimerAffectation&idVisiteur=<?php echo $uneLigne["MATRICULEVISITEUR"]?>&idPraticien=<?php echo $uneLigne["IDPRATICIEN"]?>"><img src="Images/croix.png" width="30" height= "30" alt="supprimer affectation"/></a>
			       </td>
			   </tr>
				<?php 
				}
				?>
				 <a href="index.php?uc=affectation&action=vueAjouterAffectation" lass="btn btn-lg btn-primary btn-block"> Ajouter une affectation</a>	
				</table>
			</div>
		</div>
	</div>
</div>