<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
    <?php    
        if (isset($_GET['id']) && $_GET['id'] != "") {
            try{
                $connexion = database::getDB();
                $req = "select idU from `UTILISATEUR` WHERE `idU`=?";
                $traitement = $connexion->prepare($req);
                $traitement ->bindparam(1, $_GET['id']);
                $traitement ->execute();
                if ($traitement->fetch()) {
                   $userCourant = $managerU->get($_GET['id']);
                }
                else {
                    header("location:index.php");
                }
            }
            catch(PDOException $e){
                header("location:index.php");
            }        
        }
        else {
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
