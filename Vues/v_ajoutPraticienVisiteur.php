<form action="index.php?uc=gestionPraticiens&action=confirmAjoutPraticienVisiteur" method="post">
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
    
    <input type="submit" value="valider">
</form>