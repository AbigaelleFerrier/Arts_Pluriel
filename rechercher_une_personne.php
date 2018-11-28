<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

   <button class="btn" onclick="afficheUser()" >Afficher tous les utilisateurs</button>
   <input id="pseudo" placeholder="Recherche d'un Pseudo" list="utilisateurPseudo">
    <button class="btn" onclick="SearchUser()"> Rechercher un utilisateur</button>
    <input id="act" placeholder="Recherche à partir d'une activité" list="ActName">
    <button class="btn" onclick="SearchUserByAct(document.getElementById('act').value)">Rechercher un utilisateur à partir d'une activité</button>
    <button class="btn" onclick="SeachUserByDist(<?php echo $user->getId() ?>)">Rechercher en fonction de "MaDistance"</button>

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
    <datalist id="ActName">
        <?php
            $listAct = $managerAct->getList();
            foreach ($listAct as $value) {
                echo '<option value="'.$value->getId() .'">'.$value->getNom().'</option>';
            }
        ?>
    </datalist

</body>
</html>
