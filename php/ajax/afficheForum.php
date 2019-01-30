<?php
    session_start();

    require_once '../../classes/incluDesClasses.php';
    $managerA = new AdminManager(database::getDB());
    $managerF = new ForumManager(database::getDB());
    $managerM = new MessageManager(database::getDB());

    if (isset($_GET['id']) && $_GET['id'] == -1 ) {
        //$ListForum = $managerM->getList('idF',$_GET['id']);

        echo '<h3>Forum</h3>';

        $listForum = $managerF->getList();
        $i = 0;
        foreach ($listForum as $discussion){
            if ($i % 3 == 0) {
                echo '<div class="row">';
            }
                    echo '<div class="col s4">';
                        echo "<a class='btn' style='width:100%' href='discussion.php?id=".$discussion->getId()."'>".$discussion->getTitre()."</a>";
                    echo '</div>';
            $i++;
            if ($i % 3 == 0) {
                echo '</div>';
            }
        }
        if ($i % 3 != 0) {
            echo '</div>';
        }
    }
    else if ($_GET['id'] == ""){
        echo "<h3>Veuillez saisir quelque chose<h3>";
    }else{
        $discussion = $managerF->get($_GET['id']);

        echo "<a class='btn' href='discussion.php?id=".$discussion->getId()."'>".$discussion->getTitre()."</a>";
    }
?>
