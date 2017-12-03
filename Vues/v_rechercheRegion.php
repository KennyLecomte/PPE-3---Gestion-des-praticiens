<form action="index.php?uc=praticien&action=confirmRechercheRegion" method="post">
	<p>
		<label>Région</label>
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
	<input type="submit" value ="Rechercher">
</form>

