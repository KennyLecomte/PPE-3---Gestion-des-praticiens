<center>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="index.php?uc=praticien&action=confirmRechercheRegion" method="post">
		  <div class="form-group">
		    <label>Région</label>
		    <select name="idRegion" size="1" class="form-control">
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
		  </div>
		  <button class="btn btn-default" type="submit">Rechercher</button>
		</form>
	</div>
</div>
</center>


