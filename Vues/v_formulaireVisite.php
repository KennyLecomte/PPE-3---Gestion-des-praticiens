<form action="index.php?uc=ajoutVisite&action=confirmerVisite" method="post">

	

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

	<input type="date" placeholder="Date de Visite" name="dateVisite"><br>
	<textarea class="grandInput" type="text" placeholder="Bilan de visite" name="bilanVisite"></textarea><br>
	<textarea class="grandInput" type="text" placeholder="Motif de la visite" name="motifVisite"></textarea><br>
	<input type="submit" value ="VALIDER">
	
</form>