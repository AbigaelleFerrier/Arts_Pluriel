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
                      <button class="btn" onclick="afficheLieu()" >Afficher tous les lieux</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn" onclick="SearchLieu()">Rechercher un lieu</button>
                    </td>
                    <td>
                      <input id="lieux" placeholder="Recherche d'un lieux" list="lieuxName">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn" onclick="SearchLieuByAct(document.getElementById('act').value)">Rechercher un lieu en fonction d'une activité</button>
                    </td>
                    <td>
                      <input id="act" placeholder="Recherche d'un lieux en fonction d'une activité" list="ActName">
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
