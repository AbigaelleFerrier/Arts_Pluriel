<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
   
    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listLieux = $managerL->getList();
        foreach ($listLieux as $endroit){
            echo $endroit->getLabel() . " | " . $endroit->getVille() . " | " . $endroit->getAdresse() . "<br>";
        }
    }else if ($_GET['id'] == ""){
        echo 'Veuillez saisir un nom';
    }else{
        $endroit = $managerL->get($_GET['id']);
        
        echo $endroit->getLabel() . " | " . $endroit->getVille() . " | " . $endroit->getAdresse() . "<br>";
    }
    
    
?>