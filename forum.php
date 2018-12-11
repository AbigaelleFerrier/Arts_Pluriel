<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    
    <button class="btn" onclick="afficheForum()" >Afficher tous les Forums</button>
   <input id="fTitre" placeholder="Recherche d'une discussion" list="ForumTitre">
    <button class="btn" onclick="SearchForum()"> Rechercher une discussion</button>
    <input id="act" placeholder="Recherche à partir d'une activité" list="ActName">
    <button class="btn" onclick="SearchForumByAct(document.getElementById('act').value)">Rechercher une discussion à partir d'une activité</button>
    <a class="btn" href="NewDiscussion.php">Créer une nouvelle discussion</a>

    
    <div id="Liste"></div>
    
    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    
  <datalist id="ForumTitre">
  <?php
      $listForum = $managerF->getList();
      foreach ($listForum as $value) {
          echo '<option value="'. $value->getId() .'" >'. $value->getTitre(). '</option>';
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
