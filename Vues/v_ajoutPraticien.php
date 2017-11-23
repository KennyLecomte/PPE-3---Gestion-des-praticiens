<div id="divAjoutPraticien">
	<form action="index.php?uc=praticien&action=ajouterPraticien" method="post">
	

	<p>
	<label>Region</label>
   	<select name="idRegion" size="1">
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




		<input type="text" placeholder="nom" name="nomPraticien" class="formAjoutPraticien">
		<input type="text" placeholder="prenom" name="prenomPraticien" class="formAjoutPraticien">
		<input type="text" placeholder="ville" name="villePraticien" class="formAjoutPraticien">
		<input type="text" placeholder="adresse" name="adressePraticien" class="formAjoutPraticien">
		<input type="text" placeholder="cp" name="cpPraticien" class="formAjoutPraticien">
		<input type="text" placeholder="notoriete" name="notorietePraticien" class="formAjoutPraticien">
		<input type="submit" value ="ajouter">
	</form>
</div>
