<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    			
        <h1>Modification du Profil</h1>
            <p>
                <?php 
                    
                    
                    $ddn = (time() - strtotime($user->getDdn()));
                ?> 
                    <h2> <?php echo $user->getPseudo(); ?> </h2>
                    
                    <form method="post" action="ActProfilModif.php">
                    <p>  Age :  <?php echo $ddn; ?><br/>
                        Ville : <input name="ville" value="<?php echo $user->getVille(); ?>" /><br/>
                        Mail : <input name="mail" value="<?php echo $user->getMail(); ?>" /><br/>
                        Téléphone : <input name="tel" value="<?php echo $user->getTel(); ?>" /> <br/>
                        Distance maximum : <input name="distance" value="<?php echo $user->getDistance(); ?>" /> <br/>
                        Mot de passe : <input name="mdp" /> <br/>
                        Bio :  <textarea name="bio"> <?php echo $user->getBio(); ?> </textarea>> 
                    </p>
                    
                    
                    <button class="btn" type="submit">Modifier</button>
            
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
