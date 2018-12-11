<?php
	session_start();
        
    require_once '../../classes/incluDesClasses.php';
    $managerU = new UtilisateurManager(database::getDB());
    
    //var_dump($_SESSION);

    // Obj Utilisateur //
    if (isset($_SESSION['objUser'])) {
    	$user = unserialize($_SESSION['objUser']);
    }





	if (isset($_SESSION['user']) && isset($_SESSION['access']) && $_SESSION['access'] == "limited") {
		$user->setLat($_GET['LAT']);
		$user->setLong($_GET['LONG']);
		$managerU->save($user);
	}
?>