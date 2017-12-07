<center>
	<div class="container">
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-3">
      <form action="index.php?uc=responsable&action=confirmAjouterResponsable" method="post">
        <input list="visiteurs" type="text" placeholder="Nom Visiteur" name="nomVisiteur" autocomplete="off" required class="form-control">
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
        <br>
    	<select name="idSecteur" size="1" class="form-control">
              <?php
              $ligne2 = $secteur->fetch();
              if($ligne2)
              {
                while ($ligne2) 
                {
                    echo '<option selected value = "' . $ligne2["IDSECTEUR"] . '">' . $ligne2["LIBELLESECTEUR"] . '</option>';
                    $ligne2 = $secteur->fetch();
                }
              }
              ?>
            </select>
          
        <br>
        <button class="btn btn-default" type="submit">Ajouter</button>
    </form>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>
<center>


	