

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-3">
      <h3>Ajout d'une visite</h3>
      <form action="index.php?uc=visiteur&action=confirmAjoutVisite" method="post">
      	 <select name="idPraticien" size="1" class="form-control">
           
            <?php foreach ($praticiens as $praticien) : ?>
              <option value="<?= $praticien["IDPRATICIEN"] ?>"> <?= $praticien["PRENOMPRATICIEN"] ?> <?= $praticien["NOMPRATICIEN"] ?> </option>
            <?php endforeach; ?>

      	</select><br>
      	<input type="date" placeholder="Date de Visite" name="dateVisite" class="form-control" required 
          title="Date de visite"><br>
      	<textarea type="text" placeholder="Bilan de visite" name="bilanVisite" class="form-control" required></textarea><br>
      	<textarea type="text" placeholder="Motif de la visite" name="motifVisite" class="form-control" required></textarea><br>
      	<input type="submit" value ="VALIDER" class="btn btn-lg btn-primary btn-block">
      </form>
    </div>
  </div>
</div>