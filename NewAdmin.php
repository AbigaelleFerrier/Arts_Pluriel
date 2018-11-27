<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <h3>Ajout d'un lieu</h3>
            <p><form method="post" name="formulaire" action="SaveAdmin.php">
                    <label for="pseudo">Pseudo </label>
                        <input id="pseudo" name="pseudo" type="text">
                    <label for="mdpAdm">Mot de passe </label>
                        <input id="mdpAdm" name="mdpAdm" type="text">
                    <label for="mailAdm">Mail </label>  
                        <input id="mailAdm" name="mailAdm" type="text">
                <input type="submit" value="Ajouter"/>
                    
            </p>
                

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
