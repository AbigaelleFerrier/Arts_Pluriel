<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div class="container" cntP="true" style="margin-top : 2vw; margin-bottom : 2vw">
        <div class="row">

          <div class="col s12">
              <table>
                  <tr>
                    <td>
                      <a href="NewDiscussion.php" class="btn-large">Créer une nouvelle discussion
                      </a>
                  </td>
                </tr>

                  <tr>
                    <td>
                      <button class="btn" onclick="afficheForum()" >Afficher tous les Forums</button>
                    </td>
                  </tr>


                  <tr>
                    <td>
                        <button class="btn" onclick="SearchForum()"> Rechercher une discussion</button>
                    </td>
                    <td>
                        <input id="fTitre" placeholder="Recherche d'une discussion" list="ForumTitre">
                    </td>
                  </tr>

                  <tr>
                    <td>
                        <button class="btn" onclick="SearchForumByAct(document.getElementById('act').value)">Rechercher une discussion à partir d'une activité</button>
                    </td>
                    <td>
                        <input id="act" placeholder="Recherche à partir d'une activité" list="ActName">
                    </td>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top : 2vw; margin-bottom : 2vw">
              <div class="col s12">
                  <div id="Liste"></div>
              </div>
        </div>
    </div>


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
