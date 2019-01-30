<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    <div class="container" cntP="true">
        <h3>Ajout d'une nouvelle discussion sur le forum</h3>
            <p><form method="post" name="formulaire" action="SaveDiscussion.php">
                    <label for="titre">Title </label>
                        <input id="titre" name="titre" type="text">
                    <label for="nomA">Nom de l'actitivité concerné </label>
                        <input id="nomA" name="nomA" type="text">
                <input type="submit" class="btn " value="Ajouter"/>

            </p>
        </div>


    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
