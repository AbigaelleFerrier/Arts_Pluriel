<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    			
        <h1>Profil</h1>
            <p>
                <?php 
                    
                $date = $user->getDdn();
                    $ddn = (time() - strtotime($date));
                    var_dump($date);
                    
                    $date = 
                ?> 
             <h2> <?php echo $user->getPseudo(); ?> </h2>
                    <p>  Age :  <?php echo $ddn; ?><br/>
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
