<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    			
        <h1>Profil</h1>
            <p>
                <?php 
                    $d = substr($user->getDdn(), 0, 4);              
                    $d = date('Y') - $d;   
                    
                ?> 
             <h2> <?php echo $user->getPseudo(); ?> </h2>
                    <p>  Age :  <?php echo $d; ?><br/>
                        Ville : <?php echo $user->getVille(); ?><br/>
                        Bio : <?php echo $user->getBio(); ?></p>
                    
                    <a class="btn" href="profilModif.php">Modifier vos informations</a>
            
                <?php
                    $managerU.getActivite($idU);
                ?>
            </p>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
