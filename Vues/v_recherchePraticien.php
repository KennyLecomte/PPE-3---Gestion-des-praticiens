<form action="index.php?uc=praticien&action=confirmRecherchePraticien" method="post">
	<input list="praticiens" type="text" placeholder="Nom Praticien" name="nomPraticien" autocomplete="off">
	<datalist id="praticiens">
   <?php
      $ligne = $reponse->fetch();
      
        while ($ligne) 
        {
           	echo '<option selected value = "' . $ligne['NOMPRATICIEN'] . '">' . $ligne['NOMPRATICIEN'] 
            . '</option>';
            $ligne = $reponse->fetch();
        }
      
      ?>
</datalist>
	<input type="submit" value ="Rechercher">
</form>

