<form action="index.php?uc=gestionPraticiens&action=VoirInfosPraticien" method="post">

	

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
	</select><br>
	<input type="submit" value ="RECHERCHER">
	
</form>