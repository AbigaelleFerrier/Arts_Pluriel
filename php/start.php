<?php
	session_start();
        
    require_once 'classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    $managerA = new AdminManager(database::getDB());
    

    // Obj Utilisateur //
    if (isset($_SESSION['objUser'])) {
    	$user = unserialize($_SESSION['objUser']);
    }

?>