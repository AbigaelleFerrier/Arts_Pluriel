<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <?php 
                
            $titre = $_POST['titre'];
            $nomA = $_POST['nomA'];
            
            try{
                $connexion = database::getDB();
                $req = "Select * from ACTIVITE where nomA=?";
                $traitement = $connexion->prepare($req);
                $traitement ->bindparam(1, $nomA);
                $traitement ->execute();

                if($ligne=$traitement->fetch()){
                    $idA = $ligne['idA'];
                    
                    $discussion = new Forum($titre,$idA);
                    $managerF->save($discussion);
                    $idF = $managerF->getMaxId();

                    header('location:discussion.php?id='.$idF);
                }else{
                    header("location:forum.php");
                }
            }
            catch(PDOException $e){
                header("location:index.php");
            }
                
        ?>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
</body>
</html>
