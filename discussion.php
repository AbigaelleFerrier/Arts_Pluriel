<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
<?php
        try{
            $connexion = database::getDB();
            $req = "Select pseudoU,textM,titreF from UTILISATEUR U, MESSAGE M, FORUM F where U.idU = M.idUEnvoie and F.idF = M.idF and F.idF =?";
            $traitement = $connexion->prepare($req);
            $traitement ->bindparam(1, $_GET['id']);
            $traitement ->execute();
            
            $premierpassage = true;
            while ($ligne=$traitement->fetch()){
                if($premierpassage){
                    echo '<h2 class="typoLogo">'.$ligne['titreF'].'</h2>';
                    $premierpassage = false;
                }
               echo $ligne['pseudoU']." : <br>";
               echo $ligne['textM']."<br><br>";
            }
            ?> <form method="post" name="formulaire" action="SaveMessageForum.php?idF=<?php echo $_GET['id']; ?>&idUser=<?php echo $user->getId() ?>">
                <textarea id="contenuTxt" name="contenuTxt"></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </form>
            <?php
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
