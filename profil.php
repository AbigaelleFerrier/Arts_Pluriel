<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    			
        <h1>Profil</h1>
            <p>
                <?php 
                    $connexion = database::getDB();
                    $idU = $_SESSION['noUser'];
                    $UM = new UtilisateurManager($idU);
                    $req = $UM.get($idU);
                    $traitement = $connexion ->prepare($req);
                    $traitement -> execute();
                    $row = $traitement->fetch();
                    
                    $ddn = (time() - strtotime($row[9]));
                ?> 
                    <text       type="text" name="pseudo"   value="<?php echo "$row[1]"; ?>"/><br/> 
                    <text       type="text" name="age"      value="<?php echo "$ddn"; ?>"/><br/>
                    <text       type="text" name="ville"    value="<?php echo "$row[6]"; ?>"/><br/>
                    <textarea   type="text" name="bio"      value="<?php echo "$row[10]"; ?>"/><br />
            
                <?php
                    $UM.getActivite($idU);
                ?>
            </p>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
