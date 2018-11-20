<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <?php 
                
            $pseudo = $_POST['pseudo'];
            $mdpAdm = $_POST['mdpAdm'];
            $mailAdm = $_POST['mailAdm'];
            
            $adm = new Admin($pseudo,$mdpAdm,$mailAdm);
            $managerA->save($adm);
            
            header('location:adminPanel.php');
                
        ?>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
</body>
</html>
