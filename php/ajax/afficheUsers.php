<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
   
    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listUsers = $managerU->getList();
        foreach ($listUsers as $personne){
            echo $personne->getPseudo() . " | " . $personne->getMail() . "<br>";
        }
    }
    else if ($_GET['id'] == ""){
        echo "Veuillez saisir un pseudo";
    }else{
        $personne = $managerU->get($_GET['id']);
        
        echo $personne->getPseudo() . " | " . $personne->getMail() . "<br>";
    }
?>