<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-3">
      <form action="index.php?uc=visiteur&action=confirmAjoutVisite" method="post">
      	 <select name="idPraticien" size="1" class="form-control">
            <?php
            $ligne = $praticien->fetch();
            if($ligne)
            {
              while ($ligne) 
              {
                 	echo '<option selected value = "' . $ligne["IDPRATICIEN"] . '">' . $ligne["NOMPRATICIEN"] . " " . $ligne["PRENOMPRATICIEN"] . '</option>';
                  $ligne = $praticien->fetch();
              }
            }
            ?>
      	</select><br>
      	<input type="date" placeholder="Date de Visite" name="dateVisite" class="form-control" required><br>
      	<textarea type="text" placeholder="Bilan de visite" name="bilanVisite" class="form-control" required></textarea><br>
      	<textarea type="text" placeholder="Motif de la visite" name="motifVisite" class="form-control" required></textarea><br>
      	<input type="submit" value ="VALIDER" class="btn btn-lg btn-primary btn-block">
      </form>
    </div>
  </div>
</div>