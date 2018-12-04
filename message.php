<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
<?php
   $managerM = new MessageManager(database::getDB());
   
    if (isset($_GET['id']) && isset($_GET['idUser'])) {
        $idEnvoie = $_GET['id'];
        $idUserCourant = $_GET['idUser'];
        try{
            $connexion = database::getDB();
            $req = "SELECT  M.idM,  pseudoU , M.textM 
                    FROM UTILISATEUR U,  MESSAGE M 
                    WHERE (U.idU = M.idUEnvoie 
                    AND (M.idURecois =? 
                    AND M.idUEnvoie =?))
                    or 
                        (U.idU = M.idUEnvoie
                        and M.idURecois =?
                        AND M.idUEnvoie =?)";
            $traitement = $connexion->prepare($req);
            $traitement ->bindparam(1, $idUserCourant);
            $traitement ->bindParam(2, $idEnvoie);
            $traitement ->bindParam(3, $idEnvoie);
            $traitement ->bindParam(4, $idUserCourant);
            $traitement ->execute();
            
            while($ligne=$traitement->fetch()) {
               echo $ligne['pseudoU']." : <br>".
                       $ligne['textM']."<br><br>";
            }
            //ajouter un sorte d'input txt avec un bt envoyer qui enregistre avec du js/ajax dans la bd
        }
        catch(PDOException $e){
            header("location:index.php");
        }
    }else{
        echo 'Désolée nous avons foiré ta demande';
    }
?>
    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
