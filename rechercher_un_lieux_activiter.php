<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <button class="btn" onclick="afficheLieu()" >Afficher tous les lieux</button>
    <input id="lieux" placeholder="Recherche d'un lieux" list="lieuxName">
    <button class="btn" onclick="SearchLieu()">Rechercher un lieu</button>
    <input id="act" placeholder="Recherche d'un lieux en fonction d'une activité" list="ActName">
    <button class="btn" onclick="SearchLieuByAct(document.getElementById('act').value)">Rechercher un lieu en fonction d'une activité</button>
    
    <div id="Liste"></div>
    
    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
    <datalist id="lieuxName">
        <?php
            $listLieux = $managerL->getList();
            foreach ($listLieux as $value) {
                echo '<option value="'.$value->getId() .'">'.$value->getLabel().'</option>';
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
    </datalist>


</body>
</html>
