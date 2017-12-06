<center>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="input-group">
      <form action="index.php?uc=responsable&action=confirmRecherchePraticien" method="post">
        <input list="praticiens" type="text" placeholder="Nom Praticien" name="nomPraticien" autocomplete="off" required>
        <datalist id="praticiens">
           <?php
              $ligne = $reponse->fetch();
              
                while ($ligne) 
                {
                    echo '<option selected value = "' . $ligne['NOMPRATICIEN'] . " ". $ligne['PRENOMPRATICIEN']  .'">' . $vide 
                    . '</option>';
                    $ligne = $reponse->fetch();
                }
              
              ?>
        </datalist>
        <button class="btn btn-default" type="submit">Rechercher</button>
    </form>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<center>

