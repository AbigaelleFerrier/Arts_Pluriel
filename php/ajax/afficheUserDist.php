<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
    $managerAct = new ActiviteManager(database::getDB());
   
    if (isset($_GET['id'])) {
        $listUser = $managerU->get($_GET['id'])->getUtilisateursProches();
        foreach ($listUser as $user){
            echo $user->getPseudo()  . "<br>";
            foreach ($user->getActivite() as $act) {
                //echo "sep <br/>";
                echo $act->getNom() . " | ";
            }
            echo '<br><br><br>';
        }
    }else{
        $listUser = $managerU->get($_GET['id'])->getUtilisateursProches();
        foreach ($listUser as $user){
            echo $user->getPseudo()  . "<br>";
            foreach ($user->getActivite() as $act) {
                //echo "sep <br/>";
                echo $act->getNom() . " | ";
            }
            echo '<br><br><br>';
        }
    }
    
    
?>