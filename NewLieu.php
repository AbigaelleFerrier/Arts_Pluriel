<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <h3>Ajout d'un lieu</h3>
            <p><form method="post" name="formulaire" action="SaveLieu.php">
                    <label for="label">Nom </label>
                        <input id="label" name="label" type="text">
                    <label for="tel">Téléphone </label>
                        <input id="tel" name="tel" type="text">
                    <label for="ville">Ville </label>  
                        <input id="ville" name="ville" type="text">
                    <label for="adresse">Adresse </label>   
                        <input id="adresse" name="adresse" type="text">
                <input type="submit" value="Ajouter"/>
                    
            </p>
                

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
