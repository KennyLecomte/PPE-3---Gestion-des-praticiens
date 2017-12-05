<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-3">
			<form action="index.php?uc=inscription&action=confirmInscription" method="post" class="form-signin">
				<h2 class="form-signin-heading">Inscription</h2>
				<input type="text" name="matriculeVisiteur" class="form-control" placeholder="Matricule" required autofocus autocomplete="off">
				<input type="text" name="nomVisiteur" class="form-control" placeholder="Nom" required autofocus autocomplete="off">
				<input type="text" name="prenomVisiteur" class="form-control" placeholder="Prénom" required autofocus autocomplete="off">
				<input type="text" name="adresseVisiteur" class="form-control" placeholder="Adresse" required autofocus autocomplete="off">
				<input type="text" name="villeVisiteur" class="form-control" placeholder="Ville" required autofocus autocomplete="off">
				<input type="text" name="cpVisiteur" class="form-control" placeholder="Code postal" required autofocus autocomplete="off">
				<select name="regionVisiteur" size="1" class="form-control">
			      <?php
			      $ligne = $reponse->fetch();
			      if($ligne)
			      {
			        while ($ligne) 
			        {
			           	echo '<option selected value = "' . $ligne["IDREGION"] . '">' . $ligne["NOMREGION"] 
			            . '</option>';
			            $ligne = $reponse->fetch();
			        }
			      }
			      ?>
				</select>
				<input type="date" name="dateEmbaucheVisiteur" class="form-control" required autofocus autocomplete="off">
				<input type="password" name="mdpVisiteur" class="form-control" placeholder="Mot de passe" required autofocus autocomplete="off">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
			</form>
		</div> 
	</div>
</div><!-- /container -->

