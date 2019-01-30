<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
    $managerAct = new ActiviteManager(database::getDB());

    if (isset($_GET['id'])) {
        echo '<table class="striped responsive-table highlight">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th>Activiter</th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>';

        $listUsers = $managerU->get($_GET['id'])->getUtilisateursProches();

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

    }else{
        echo "<H3>Erreur</h3>";
    }


?>
