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
                      <th>Mail</th>
                    </tr>
                  </thead>

                  <tbody>';


                    foreach ($listUsers as $personne){
                        echo "<tr>";
                            echo "<td>" . $personne->getPseudo()   . "</td>";
                            echo "<td>" . $personne->getMail()   . "</td>";
                            foreach ($variable as $key => $value) {
                              // code...
                            }

                            echo "<td>" . "<a href='profil.php?id=". $personne->getId() ."'>Voir son profil</a>" . "</td>";
                        echo "</tr>";
                    }
    }
    else if ($_GET['id'] == ""){
        echo "Veuillez saisir un pseudo";
    }else{
        $personne = $managerU->get($_GET['id']);

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th>Mail</th>
                    </tr>
                  </thead>

                  <tbody>';
                  echo "<tr>";
                      echo "<td>" . $personne->getPseudo()   . "</td>";
                      echo "<td>" . $personne->getMail()   . "</td>";
                      echo "<td>" . "h" . "</td>";
                  echo "</tr>";

          echo "    </tbody>
                </table>";
    }
?>
