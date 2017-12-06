<center>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="input-group">
      <form action="index.php?uc=praticien&action=confirmRechercheVisiteur" method="post">
        <input list="visiteurs" type="text" placeholder="Nom Visiteur" name="nomVisiteur" autocomplete="off" required>
        <datalist id="visiteurs">
           <?php
              $ligne = $reponse->fetch();
              
                while ($ligne) 
                {
                    echo '<option selected value = "' . $ligne['NOMVISITEUR'] . " ". $ligne['PRENOMVISITEUR']. '">' . $vide 
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

