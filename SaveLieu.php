<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
        <?php 
                
            $label = $_POST['label'];
            $tel = $_POST['tel'];
            $ville = $_POST['ville'];
            $adresse = $_POST['adresse'];
            
            $endroit = new Lieux($label,$tel,$ville,$adresse);
            $managerL->save($endroit);
            
            header('location:adminPanel.php');
                
        ?>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
</body>
</html>
