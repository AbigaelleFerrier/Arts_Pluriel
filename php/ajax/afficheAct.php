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
            echo $activite->getNom() . " | " . $endroit->getLieux() . "<br>";
        }
    }else {
        $actvite = $managerAct->get($_GET['id']);
        
        echo $activite->getNom() . " | " . $endroit->getLieux() . "<br>";
    }
    
    
?>