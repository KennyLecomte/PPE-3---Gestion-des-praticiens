<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-text"> Bonjour <?php echo $_SESSION['prenomVisiteur']," ",$_SESSION['nomVisiteur']?> </p>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
  		<li><a href="index.php?uc=gestionPraticiens&action=voirPraticiens">Voir vos praticiens</a></li>
  		<li><a href="index.php?uc=ajoutVisite&action=formulaireVisite">Ajouter une visite</a></li>
  		<li><a href="index.php?uc=gestionPraticiens&action=FormulairePraticien">Voir les praticiens</a></li>
  		<li><a href="index.php?uc=gestionPraticiens&action=RechercheNotoriete">Rechercher par notoriété</a></li>
  		<li><a href="index.php?uc=gestionPraticiens&action=RechercheSpecialite">Rechercher par spécialité</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a href="index.php?uc=deconnexion" type="button" class="btn btn-default navbar-btn">Déconnexion</a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>