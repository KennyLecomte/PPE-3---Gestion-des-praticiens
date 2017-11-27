<table>
    <tr>
	    <td>Nom :</td>
	    <td>Prénom :</td>
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
            <td width=30><a href=index.php?uc=supprClient&action=supprClient&num=<?php echo $id ?>><img src="images/supp.png" title="Suppr"></a></td>
            </tr>
    <?php 
        }
    ?>
</table>

<a href="index.php?uc=gestionPraticiens&action=ajoutPraticienVisiteur">Ajouter un praticien</a>

