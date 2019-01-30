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
                      <button class="btn" onclick="afficheUser()" >Afficher tous les utilisateurs</button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <button class="btn" onclick="SeachUserByDist(<?php echo $user->getId() ?>)">Rechercher en fonction de "MaDistance"</button>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <button class="btn" onclick="SearchUser()"> Rechercher un utilisateur</button>
                    </td>
                    <td>
                      <input id="pseudo" placeholder="Recherche d'un Pseudo" list="utilisateurPseudo">
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <button class="btn" onclick="SearchUserByAct(document.getElementById('act').value)">Rechercher un utilisateur à partir d'une activité</button>
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
