<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
    
    <button class="btn" onclick="afficheUser()" >Afficher tous les utilisateurs</button>
    <button class="btn" onclick="afficheLieu()" >Afficher tous les lieux</button>
    <a class="btn" href="AdminModifInfo.php">Modifier vos informations</a>
    <a class="btn" href="NewAdmin.php">Créer un nouvel administrateur</a>
    <button class="btn" onclick="SearchUser()"> Rechercher un utilisateur</button>
    <button class="btn" onclick="SearchLieu()">Rechercher un lieu</button>
    
    <div name="Liste"></div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
