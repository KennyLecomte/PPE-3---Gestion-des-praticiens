<table>
    <tr>
        <td>Nom Visiteur :</td>
        <td>Prénom Visiteur :</td>
	    <td>Nom Praticien :</td>
	    <td>Prénom Praticien :</td>
    </tr> 
    <?php	
        foreach($results as $result)
        {
            $nomPraticien = $result['NOMPRATICIEN'];
            $prenomPraticien = $result['PRENOMPRATICIEN'];
            $nomVisiteur = $result['NOMVISITEUR'];
            $prenomVisiteur = $result['PRENOMVISITEUR'];
    ?>
        <tr>
            <td><?php echo $nomVisiteur ?></td>
            <td><?php echo $prenomVisiteur ?></td>
            <td><?php echo $nomPraticien ?></td>
            <td><?php echo $prenomPraticien ?></td>
            </tr>
    <?php 
        }
    ?>
</table>

