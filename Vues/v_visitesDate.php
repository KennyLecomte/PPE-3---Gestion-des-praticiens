<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="panel panel-default">
                <table class="table">
                    <tr>
                        <td>Nom Visiteur</td>
                        <td>Prénom Visiteur</td>
                	    <td>Nom Praticien</td>
                	    <td>Prénom Praticien</td>
                        <td>Date</td>
                        <td>Bilan</td>
                        <td>Motif</td>
                    </tr> 
                    <?php	
                        foreach($results as $result)
                        {
                            $nomPraticien = $result['NOMPRATICIEN'];
                            $prenomPraticien = $result['PRENOMPRATICIEN'];
                            $nomVisiteur = $result['NOMVISITEUR'];
                            $prenomVisiteur = $result['PRENOMVISITEUR'];
                            $dateVisite = $result['dateVisite'];
                            $bilanVisite = $result['bilanVisite'];
                            $motifVisite = $result['motifVisite'];
                    ?>
                        <tr>
                            <td><?php echo $nomVisiteur ?></td>
                            <td><?php echo $prenomVisiteur ?></td>
                            <td><?php echo $nomPraticien ?></td>
                            <td><?php echo $prenomPraticien ?></td>
                            <td><?php echo $dateVisite ?></td>
                            <td><?php echo $bilanVisite ?></td>
                            <td><?php echo $motifVisite ?></td>
                            </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

