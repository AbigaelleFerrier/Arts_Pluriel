<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <?php 
                
            $pseudo = $_POST['pseudo'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordV = $_POST['passwordV'];
            $tel = $_POST['tel'];
            $ville = $_POST['ville'];
            $distance = $_POST['distance'];
            
            $newUser = new Utilisateur($pseudo,$nom,$prenom,$email,$tel,$ville,$distance,$password);
            $managerU->save($newUser);
            
            header('location:index.php');
                
        ?>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
</body>
</html>
