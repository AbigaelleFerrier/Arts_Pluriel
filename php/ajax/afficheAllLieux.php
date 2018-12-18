<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());

    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listLieux = $managerL->getList();

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Ville</th>
                      <th>Adresse</th>
                    </tr>
                  </thead>

                  <tbody>';

                      foreach ($listLieux as $endroit) {
                          echo "<tr>";
                              echo "<td>" . $endroit->getLabel()   . "</td>";
                              echo "<td>" . $endroit->getVille()   . "</td>";
                              echo "<td>" . $endroit->getAdresse() . "</td>";
                          echo "</tr>";
                      }
        echo "    </tbody>
              </table>";

    }else if ($_GET['id'] == ""){
        echo '<h4>Veuillez saisir un nom</h4>';
    }else{
        $endroit = $managerL->get($_GET['id']);

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Ville</th>
                      <th>Adresse</th>
                    </tr>
                  </thead>

                  <tbody>';
                  echo "<tr>";
                      echo "<td>" . $endroit->getLabel()   . "</td>";
                      echo "<td>" . $endroit->getVille()   . "</td>";
                      echo "<td>" . $endroit->getAdresse() . "</td>";
                  echo "</tr>";
      echo "    </tbody>
            </table>";
    }


?>
