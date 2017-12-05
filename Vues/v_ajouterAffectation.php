<div class="container">

    <div class="row">
      <form action="index.php?uc=affectation&action=ajouterAffectation" method="post">
        <div class="col-md-5"></div>
        <div class="col-md-2">
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
        <div class="col-md-5"></div>

    </div>


     <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <select name="idVisiteur" size="1" class="form-control">
            <?php
            $ligne = $visiteur->fetch();
            if($ligne)
            {
              while ($ligne) 
              {
                  echo '<option selected value = "' . $ligne["MATRICULEVISITEUR"] . '">' . $ligne["NOMVISITEUR"] . " " . $ligne["PRENOMVISITEUR"] . '</option>';
                  $ligne = $visiteur->fetch();
              }
            }
            ?>
          </select>
        </div>
        <div class="col-md-5"></div>
    </div>

     <div class="row" >
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <input type="submit" value="valider" class="btn btn-lg btn-primary btn-block">
          </form> 
        </div>
        <div class="col-md-5"></div>
    </div>
  
</div>





















 
    

      
     