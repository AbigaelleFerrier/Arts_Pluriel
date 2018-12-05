<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
<?php
   if ((isset($_GET['id']) && $_GET['id'] != "")) {
            $idUtilisateur_a_use = $_GET['id'];
            $monprofil           = "no";
        }
        else if (!(isset($_GET['id'])) && isset($_SESSION['user'])) {
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
               echo "<a class='btn'  href='message.php?id=".$ligne['idUEnvoie']."&idUser=".$idUtilisateur_a_use."'>".$ligne['pseudoU']."</a>";
            }
        }
        catch(PDOException $e){
            header("location:index.php");
        }
        
        
?>
    
     <div id="ListMessage"></div>
     
    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
