<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="panel panel-default">
                <table class="table">
                    <tr>
                	    <td>Nom Praticien</td>
                	    <td>Prénom Praticien</td>
                        <td>Région</td>
                    </tr> 
                    <?php	
                        foreach($results as $result)
                        {
                            $nomPraticien = $result['NOMPRATICIEN'];
                            $prenomPraticien = $result['PRENOMPRATICIEN'];
                            $nomRegion = $result['NOMREGION'];
                    ?>
                        <tr>
                            <td><?php echo $nomPraticien ?></td>
                            <td><?php echo $prenomPraticien ?></td>
                            <td><?php echo $nomRegion ?></td>
                            </tr>
                    <?php 
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

