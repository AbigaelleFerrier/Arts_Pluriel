<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
    
    <button class="btn" onclick="afficheUser()" >Afficher tous les utilisateurs</button>
    <button class="btn" onclick="afficheLieu()" >Afficher tous les lieux</button>
    <a class="btn" href="AdminModifInfo.php">Modifier vos informations</a>
    <a class="btn" href="NewAdmin.php">Créer un nouvel administrateur</a>
    <input id="pseudo" placeholder="Recherche d'un Pseudo" list="utilisateurPseudo">
    <button class="btn" onclick="SearchUser()"> Rechercher un utilisateur</button>
    <input id="lieux" placeholder="Recherche d'un lieux" list="lieuxName">
    <button class="btn" onclick="SearchLieu()">Rechercher un lieu</button>
    <a class="btn" href="NewLieu.php">Ajouter un lieu</a>
    
    <div id="Liste"></div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

    
    <datalist id="utilisateurPseudo">
        <?php
            $listUser = $managerU->getList();
            foreach ($listUser as $value) {
                echo '<option value="'. $value->getId() .'" >'. $value->getPseudo(). '</option>';
            }
        ?>
    </datalist>
    <datalist id="lieuxName">
        <?php
            $listLieux = $managerL->getList();
            foreach ($listLieux as $value) {
                echo '<option value="'.$value->getId() .'">'.$value->getLabel().'</option>';
            }
        ?>
    </datalist>
    
</body>
</html>
