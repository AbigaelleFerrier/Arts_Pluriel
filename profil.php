<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    

    <?php 
        /* Si id et renseigner dans la requette on affichera le profil de l'user */
        /* Si non si l'uszer est co il voie son profil [Variable monprofil pour savoir si il est sur son propre compte] */
        /* Si non il est renvoyer a l'index */ 

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
            $req = "SELECT idU from `UTILISATEUR` WHERE `idU`=?";
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
    <div id="profil">
        <div class="container" >
            <div class="row">
                <div class="cols12">
                    <h2 class="typoLogo"><?php echo $userCourant->getPseudo(); ?></h2>
                </div>                
            </div>
                
            <div class="row">
                <div class="col m6 s12">
                    <?php 
                        // Calcule de l'age //
                        $d = substr($userCourant->getDdn(), 0, 4);              
                        $d = date('Y') - $d;   
                    ?> 

                    <p> Age     : <?php echo $d; ?><br/>
                        Ville   : <?php echo $userCourant->getVille(); ?><br/>
                        Bio     : <?php echo $userCourant->getBio(); ?>
                    </p>
                </div>
            
                <div class="col m6 s12">
                    <?php
                        $tabAct = $userCourant->getActivite($userCourant->getId());
                        foreach ($tabAct as $key => $objAct) {
                            echo '<div class="chip right">';
                            echo $objAct->getNom() . " ";
                            echo '</div>';
                        }
                    ?>
                </div> 
            </div>

            <div class="row">                
                <?php  
                    // si il est connecter on le laisse aller modef c'est info
                    if ($monprofil == "ok" ) {
                ?>
                        <div class="col s12 right">
                            <a class="btn right" href="profilModif.php">Modifier vos informations</a>
                        </div>
                <?php  
                    } 
                ?>
            </div>
        </div>
    </div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
