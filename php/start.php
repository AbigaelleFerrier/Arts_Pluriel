<?php
	session_start();
    include 'classes/incluDesClasses.php';

    // Manager utilisable partout //
    $manaU = new UtilisateurManager(database::getDB());
    $manaA = new AdminManager(database::getDB());

    // Obj Utilisateur //
    if (isset($_SESSION['objUser'])) {
    	$user = unserialize($_SESSION['objUser']);
    }

?>