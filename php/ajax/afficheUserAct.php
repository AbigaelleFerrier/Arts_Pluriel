<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
    $managerAct = new ActiviteManager(database::getDB());

    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listAct = $managerAct->getList();
        foreach ($listAct as $activite){
            echo '<h3>' . $activite->getNom()  . "</h3>";

            echo '<table class="striped responsive-table highlight">
                      <thead>
                        <tr>
                          <th>Pseudo</th>
                          <th>Activiter</th>
                          <th></th>
                        </tr>
                      </thead>';

                    foreach ($managerAct->getListeUser($_GET['id']) as $personne) {
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
    }else if ($_GET['id'] == ""){
        echo "<h3>Veuillez choisir une activité</h3>";
    }else{
        $activite = $managerAct->get($_GET['id']);

        echo '<h3>' . $activite->getNom()  . "</h3>";

        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th></th>
                    </tr>
                  </thead>';

                foreach ($managerAct->getListeUser($_GET['id']) as $personne) {
                    echo "<tr>";
                        echo "<td class='showPersonnePseudo typoLogo'>" . $personne->getPseudo()   . "</td>";
                        //echo "<td>" . $personne->getMail()   . "</td>";
                        echo "<td>" . "<a class='btn right' href='profil.php?id=". $personne->getId() ."'>Voir son profil</a>" . "</td>";
                    echo "</tr>";
                }
    }


?>
