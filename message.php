<?php include 'php/start.php' ; ?>

<?php
   $managerM = new MessageManager(database::getDB());

    if (isset($_GET['id']) && isset($_GET['idUser'])) {
        $idEnvoie = $_GET['id'];
        $idUserCourant = $_GET['idUser'];
        // var_dump($_GET['idUser']);
        try{
            $connexion = database::getDB();
            $req = "SELECT  M.idM,  pseudoU , M.textM, M.idUEnvoie
                    FROM UTILISATEUR U,  MESSAGE M
                    WHERE (U.idU = M.idUEnvoie  AND (M.idURecois =?  AND M.idUEnvoie =?))
                    or    (U.idU = M.idUEnvoie  and M.idURecois =?   AND M.idUEnvoie =?)";
            $traitement = $connexion->prepare($req);
            $traitement ->bindparam(1, $idUserCourant);
            $traitement ->bindParam(2, $idEnvoie);
            $traitement ->bindParam(3, $idEnvoie);
            $traitement ->bindParam(4, $idUserCourant);
            $traitement ->execute();

            while($ligne=$traitement->fetch()) {
                echo '<div class="row">';
                    if ($ligne['idUEnvoie'] == $idEnvoie) {
                        echo '<div class="col s12 right"><p class="messageShow messageRight right-align">'
                            . $ligne['textM'] .
                        '</p></div>';
                    }
                    else {
                        echo '<div class="col s12"><p class="messageShow messageLeft">'
                            . $ligne['textM'] .
                        '</p></div>';
                    }
                echo "</div>";
            }
            //ajouter un sorte d'input txt avec un bt envoyer qui enregistre avec du js/ajax dans la bd
            // var_dump($idUserCourant);
            ?>

            
            <?php
        }
        catch(PDOException $e){
            header("location:index.php");
        }
    }else{
        echo 'Désolée nous avons foiré ta demande';
    }
?>
