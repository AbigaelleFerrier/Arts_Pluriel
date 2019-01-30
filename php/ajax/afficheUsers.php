<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());

    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listUsers = $managerU->getList();

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th>Activiter</th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>';


                    foreach ($listUsers as $personne){
                        echo "<tr>";
                            echo "<td class='showPersonnePseudo typoLogo'>" . $personne->getPseudo()   . "</td>";
                            //echo "<td>" . $personne->getMail()   . "</td>";
                            echo "<td>";
                                foreach ($personne->getActivite() as $key => $activiter) {
                                  echo '<div class="chip ">'. $activiter->getNom() . "</div>";
                                }
                            echo "</td>";

                            echo "<td>" . "<a class='btn right' href='profil.php?id=". $personne->getId() ."'>Voir son profil</a>" . "</td>";
                        echo "</tr>";
                    }
    }
    else if ($_GET['id'] == ""){
        echo "<h3>Veuillez saisir un pseudo</h3>";
    }else{
        $personne = $managerU->get($_GET['id']);

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th>Activiter</th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>';
                  echo "<tr>";
                      echo "<td class='showPersonnePseudo typoLogo'>" . $personne->getPseudo()   . "</td>";
                      //echo "<td>" . $personne->getMail()   . "</td>";
                      echo "<td>";
                          foreach ($personne->getActivite() as $key => $activiter) {
                            echo '<div class="chip ">'. $activiter->getNom() . "</div>";
                          }
                      echo "</td>";

                      echo "<td>" . "<a class='btn right' href='profil.php?id=". $personne->getId() ."'>Voir son profil</a>" . "</td>";
                  echo "</tr>";

          echo "    </tbody>
                </table>";
    }
?>
