<?php
    require ("classes/Activite.class.php");
    require ("classes/Activite.Manager.php");
    require ("classes/Admin.class.php");
    require ("classes/Admin.Manager.php");
    require ("classes/Lieux.class.php");
    require ("classes/Lieux.Manager.php");
    require ("classes/Message.class.php");
    require ("classes/Message.Manager.php");
    require ("classes/SousActivite.class.php");
    require ("classes/SousActivite.Manager.php");
    require ("classes/Utilisateur.class.php");
    require ("classes/Utilisateur.Manager.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo "<br><br>TEST DE LA CLASSE UTILISATEUR <br>"; //IMPOSSIBLE A TESTER
            echo "------------------------------------------------";
            $managerU = new UtilisateurManager(database::getDB());
            echo"<pre>";
                var_dump ($managerU->getList());
            echo '</pre><pre>';
                var_dump ($managerU->getList("WHERE idU<4"));
            echo '</pre><pre>';
                var_dump ($managerU->get(14));
            echo '</pre>';
            $UTest = new Utilisateur(45,"pseudo","nom", "prenom", "mail", "tel", "ville", "distance", "mdp","","","","");
            
            echo '<pre>';
                var_dump ($managerU->save($UTest));
            echo '</pre>';
            
            $UTest->setId(27);
            $UTest->setPseudo("PseudoGenial");
            echo '<pre>';
                var_dump ($managerU->save($UTest));
            echo '</pre>';
            var_dump ($managerU->delete($UTest));
            $UTest->setId(28);
            echo '<pre>';
                var_dump ($managerU->delete($UTest));
            echo '</pre>';
            
        ?>
    </body>
</html>
