<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-2">
			<form action="index.php?uc=praticien&action=ajouterPraticien" method="post">
				
				<p>
				<label>Region</label>
		   	
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
				</p>
				<input type="text" class="form-control" placeholder="nom" name="nomPraticien" class="formAjoutPraticien">
				<input type="text" class="form-control" placeholder="prenom" name="prenomPraticien" class="formAjoutPraticien">
				<input type="text" class="form-control" placeholder="ville" name="villePraticien" class="formAjoutPraticien">
				<input type="text" class="form-control" placeholder="adresse" name="adressePraticien" class="formAjoutPraticien">
				<input type="text" class="form-control" placeholder="cp" name="cpPraticien" class="formAjoutPraticien">
				<input type="text" class="form-control" placeholder="notoriete" name="notorietePraticien" class="formAjoutPraticien">
				</p>
				<input type="submit" class="btn btn-lg btn-primary btn-block" value ="ajouter">
			</form>

