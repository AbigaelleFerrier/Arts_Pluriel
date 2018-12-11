<?php
    session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerA = new AdminManager(database::getDB());
    $managerF = new ForumManager(database::getDB());
    $managerM = new MessageManager(database::getDB());
   
    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        //$ListForum = $managerM->getList('idF',$_GET['id']);
        $listForum = $managerF->getList();
        foreach ($listForum as $discussion){
            echo $discussion->getTitre() . "<br>";
        }
    }
    else if ($_GET['id'] == ""){
        echo "Veuillez saisir quelque chose";
    }else{
        $discussion = $managerF->get($_GET['id']);
        
        echo $discussion->getTitre() . "<br>";
    }
?>