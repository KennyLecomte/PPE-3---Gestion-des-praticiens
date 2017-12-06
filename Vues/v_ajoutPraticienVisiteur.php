<center>
<div class="row">
  <div class="col-md-5"></div>
  <div class="col-md-2">
    <form action="index.php?uc=gestionPraticiens&action=confirmAjoutPraticienVisiteur" method="post">
      <div class="form-group">
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
        </select>
      </div>
      <button class="btn btn-default" type="submit">Valider</button>
    </form>
  </div>
</div>
</center>
