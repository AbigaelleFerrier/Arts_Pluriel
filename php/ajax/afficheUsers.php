<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
   
    $listUsers = $managerU->getList();
    foreach ($listUsers as $personne){
        echo $personne->getNom() . "<br>";
        echo $personne->getPrenom() . "<br>";
    }
?>