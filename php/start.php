<?php
	session_start();
    include 'classes/incluDesClasses.php';

    // Manager utilisable partout //
    $mana = new UtilisateurManager(database::getDB());

    // Obj Utilisateur //
    if (isset($_SESSION['objUser'])) {
    	$user = unserialize($_SESSION['objUser']);
    }

?>