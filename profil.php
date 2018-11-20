<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
    <?php    
        if ((isset($_GET['id']) && $_GET['id'] != "")) {
            $idUtilisateur_a_use = $_GET['id'];
        }
        else if (isset($_SESSION['user'])) {
            $idUtilisateur_a_use = $user->getId();
        }
        else {
            header("location:index.php");
        }

        try{
            $connexion = database::getDB();
            $req = "select idU from `UTILISATEUR` WHERE `idU`=?";
            $traitement = $connexion->prepare($req);
            $traitement ->bindparam(1, $idUtilisateur_a_use);
            $traitement ->execute();
            
            if ($traitement->fetch()) {
               $userCourant = $managerU->get($idUtilisateur_a_use);
            }
            else {
                header("location:index.php");
            }
        }
        catch(PDOException $e){
            header("location:index.php");
        }
    ?>

        <h1>Profil</h1>
            <p>
                <?php 
                    $d = substr($userCourant->getDdn(), 0, 4);              
                    $d = date('Y') - $d;   
                    
                ?> 
             <h2> <?php echo $userCourant->getPseudo(); ?> </h2>
                    <p> Age :  <?php echo $d; ?><br/>
                        Ville : <?php echo $userCourant->getVille(); ?><br/>
                        Bio : <?php echo $userCourant->getBio(); ?></p>
                    
                    <a class="btn" href="profilModif.php">Modifier vos informations</a>
            
                <?php
                    $tabAct = $userCourant->getActivite($userCourant->getId());
                    foreach ($tabAct as $key => $objAct) {
                        echo $objAct->getNom() . " ";
                    }
                ?>
            </p>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
