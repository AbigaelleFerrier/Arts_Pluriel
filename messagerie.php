<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div class="row" cntP="true" style="padding:2em 1em">
        <div class="col s3">
            <?php
                if (isset($_SESSION['user'])) {
                    $idUtilisateur_a_use = $user->getId();
                    $monprofil           = "ok";
                }
                else {
                    header("location:index.php");
                }

                try{
                    $connexion = database::getDB();
                    $req = "Select pseudoU,idUEnvoie from UTILISATEUR U, MESSAGE M where U.idU = M.idUEnvoie and idURecois = ? group by idUEnvoie";
                    $traitement = $connexion->prepare($req);
                    $traitement ->bindparam(1, $idUtilisateur_a_use);
                    $traitement ->execute();

                    while($ligne=$traitement->fetch()) {
                        echo '<div class="row">';
                            echo '<a class="btn" style="width: 100%;"  onclick="message('. $ligne['idUEnvoie'].','. $idUtilisateur_a_use .');">'. $ligne['pseudoU'] .'</a>';
                        echo '</div>';
                    }
                }
                catch(PDOException $e){
                    header("location:index.php");
                }
            ?>
        </div>
        <div class="col s8">
            <div id="ListMessage"></div>
        </div>
    </div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
