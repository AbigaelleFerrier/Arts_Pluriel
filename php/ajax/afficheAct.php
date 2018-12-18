<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
    $managerAct = new ActiviteManager(database::getDB());

    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listAct = $managerAct->getList();

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Activité</th>
                      <th>Nom</th>
                      <th>Ville</th>
                      <th>Adresse</th>
                      <th>Téléphone</th>
                    </tr>
                  </thead>

                  <tbody>';
                        foreach ($listAct as $activite){
                            foreach ($managerAct->getListeLieu($_GET['id']) as $UnLieux) {
                                  echo "<tr>";
                                      echo "<td>" . $activite->getNom()    . "</td>";
                                      echo "<td>" . $UnLieux->getLabel()   . "</td>";
                                      echo "<td>" . $UnLieux->getVille()   . "</td>";
                                      echo "<td>" . $UnLieux->getAdresse() . "</td>";
                                      echo "<td>" . $UnLieux->getTel()     . "</td>";
                                  echo "</tr>";
                            }
                        }
        echo "    </tbody>
              </table>";


    }

    else if ($_GET['id'] == ""){
        echo "Veuillez choisir une activité";
    }


    else{
        $activite = $managerAct->get($_GET['id']);

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Activité</th>
                      <th>Nom</th>
                      <th>Ville</th>
                      <th>Adresse</th>
                      <th>Téléphone</th>
                    </tr>
                  </thead>

                  <tbody>';

                      foreach ($managerAct->getListeLieu($_GET['id']) as $UnLieux) {
                          echo "<tr>";
                              echo "<td>" . $activite->getNom()    . "</td>";
                              echo "<td>" . $UnLieux->getLabel()   . "</td>";
                              echo "<td>" . $UnLieux->getVille()   . "</td>";
                              echo "<td>" . $UnLieux->getAdresse() . "</td>";
                              echo "<td>" . $UnLieux->getTel()     . "</td>";
                          echo "</tr>";
                      }
        echo "    </tbody>
              </table>";
    }


?>
