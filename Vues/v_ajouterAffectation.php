<form action="index.php?uc=affectation&action=ajouterAffectation" method="post">
	<select name="idPraticien" size="1">
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

	<select name="idVisiteur" size="1">
      <?php
      $ligne = $visiteur->fetch();
      if($ligne)
      {
        while ($ligne) 
        {
           	echo '<option selected value = "' . $ligne["IDVISITEUR"] . '">' . $ligne["NOMVISITEUR"] . " " . $ligne["PRENOMVISITEUR"] . '</option>';
            $ligne = $visiteur->fetch();
        }
      }
      ?>
	</select>
	<input type="submit" value="valider">
</form>