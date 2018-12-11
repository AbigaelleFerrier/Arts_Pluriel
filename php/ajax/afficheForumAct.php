<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    $managerL = new LieuxManager(database::getDB());
    $managerAct = new ActiviteManager(database::getDB());
    $managerF = new ForumManager(database::getDB());
    $managerM = new MessageManager(database::getDB());
   
    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        $listAct = $managerAct->getList();
        foreach ($listAct as $activite){
            echo $activite->getNom()  . "<br>";
            $ListForum = $managerF->getList("WHERE idA =". $_GET['id']);
            foreach ($ListForum as $discussion) {
                echo "<a class='btn' href='discussion.php?id=".$discussion->getId()."'>".$discussion->getTitre()."</a>";
                echo "<br>";
            }
        }
    }else if ($_GET['id'] == ""){
        echo "Veuillez choisir une activité";
    }else{
        $activite = $managerAct->get($_GET['id']);
        $ListForum = $managerF->getList("WHERE idA =". $_GET['id']);
        foreach ($ListForum as $discussion) {
            echo "<a class='btn' href='discussion.php?id=".$discussion->getId()."'>".$discussion->getTitre()."</a>";
            echo "<br>";
        }
    }
    
    
?>