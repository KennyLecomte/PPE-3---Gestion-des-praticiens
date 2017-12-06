<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="panel panel-default">
                <!-- Table -->
                <table class="table">
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                </tr>
                    <?php   
                        foreach($lesPraticiens as $unPraticien)
                        {
                            $nom = $unPraticien['NOMPRATICIEN'];
                            $prenom = $unPraticien['PRENOMPRATICIEN'];
                            $id = $unPraticien['IDPRATICIEN'];
                    ?>
                        <tr>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $prenom ?></td>
                            <td width=30><a href=index.php?uc=gestionPraticiens&action=supprimerAffectation&id=<?php echo $id ?>>Supprimer</a></td>
                            </tr>
                    <?php 
                        }
                    ?> 
                </table>
            </div>
            <a class="btn btn-lg btn-primary btn-block" href="index.php?uc=gestionPraticiens&action=ajoutPraticienVisiteur">Ajouter une affectation</a>
        </div>
    </div>
</div>



