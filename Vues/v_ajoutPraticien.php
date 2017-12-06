<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-3">
			<form action="index.php?uc=praticien&action=ajouterPraticien" method="post">
		   	
			   	
				<br>
				<input type="text" class="form-control" placeholder="Nom" name="nomPraticien" class="formAjoutPraticien">
				<br>
				<input type="text" class="form-control" placeholder="Prenom" name="prenomPraticien" class="formAjoutPraticien">
				<br>
				<input type="text" class="form-control" placeholder="Ville" name="villePraticien" class="formAjoutPraticien">
				<br>
				<input type="text" class="form-control" placeholder="Adresse" name="adressePraticien" class="formAjoutPraticien">
				<br>
				<input type="text" class="form-control" placeholder="Code postal" name="cpPraticien" class="formAjoutPraticien">
				<br>
				<select name="idRegion" class="form-control" size="1">
			      <?php
			      $ligne = $reponse->fetch();
			      if($ligne)
			      {
			        while ($ligne) 
			        {
			           	echo '<option selected value = "' . $ligne["IDREGION"] . '">' . $ligne["NOMREGION"] 
			            . '</option>';
			            $ligne = $reponse->fetch();
			        }
			      }
			      ?>
				</select>
				<br>
				<input type="text" class="form-control" placeholder="Notoriété" name="notorietePraticien" class="formAjoutPraticien">
				<br>
				<input type="submit" class="btn btn-lg btn-primary btn-block" value ="Ajouter">
			</form>
		</div>
	</div>
</div>