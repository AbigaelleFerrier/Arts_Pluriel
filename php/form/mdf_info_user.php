<?php
	//var_dump($_POST);
	session_start();
	require_once("../../classes/incluDesClasses.php");
	$managerU = new UtilisateurManager(database::getDB());

	$db = database::getDB();
	
	if (isset($_POST['id'])) {
		
		if ( isset($_POST['ville']) && $_POST['ville'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `villeU`=?		where `idU`=?";
			$traitement = $db->prepare($SQL);
			$traitement->bindparam(1,$_POST['ville']);
			$traitement->bindparam(2,$_POST['id']);
			$traitement->execute();
		}

		if ( isset($_POST['mail']) && $_POST['mail'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `mailU`=? 	where `idU`=?";
			$traitement = $db->prepare($SQL);
			$traitement->bindparam(1,$_POST['mail']);
			$traitement->bindparam(2,$_POST['id']);
			$traitement->execute();
		}

		if ( isset($_POST['dmr']) && $_POST['dmr'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `distanceU`= ?  where `idU`=?";
			$traitement = $db->prepare($SQL);
			$traitement->bindparam(1,$_POST['dmr']);
			$traitement->bindparam(2,$_POST['id']);
			$traitement->execute();
		}

		if ( isset($_POST['mdp']) && $_POST['mdp'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `mdpU`=MD5(?)  where `idU`=?";
			$traitement = $db->prepare($SQL);
			$traitement->bindparam(1,$_POST['mdp']);
			$traitement->bindparam(2,$_POST['id']);
			$traitement->execute();
		}

		if ( isset($_POST['tel']) && $_POST['tel'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `telU`=? 		where `idU`=?";
			$traitement = $db->prepare($SQL);
			$traitement->bindparam(1,$_POST['tel']);
			$traitement->bindparam(2,$_POST['id']);
			$traitement->execute();
		}

		if ( isset($_POST['bio']) && $_POST['bio'] != "" ) {
			$SQL = "UPDATE `UTILISATEUR` set `bioU`=? 		where `idU`=?";
		  	$traitement = $db->prepare($SQL);
		  	$traitement->bindparam(1,$_POST['bio']);
		  	$traitement->bindparam(2,$_POST['id']);
		  	$traitement->execute();
	  	}
	  	
	  	/* ------- KILL DE L'obj UTILISATEUR ------- */
	  	/*											 */
	  	/* réafectation des nouvelle valeur juste et */
	  	/* surtout de c'est activiter lier 			 */
	  	/*											 */
	  	/*											 */
	  	/* ------- Amelioration POO posible  ------- */
	  	/*											 */
	  	/*  -> modif l'obj user 					 */
	  	/*  -> save  l'obj 							 */
	  	/*  -> modif la table pratique 				 */
	  	/*  -> kill  l'obj 							 */
	  	/*  -> le réinstancier 						 */
	  	/*											 */
	  	/* ----------------------------------------- */

	  	if (isset($_POST['activiter'])) {
	  		$SQL = "DELETE FROM `pratique` WHERE idU = ?";
	  		$traitement = $db->prepare($SQL);
	  		$traitement->bindparam(1,$_POST['id']);
	  		$traitement->execute();
	  		
	  		foreach ($_POST['activiter'] as $idA) {
	  			//var_dump($idA);

	  			$SQL = "INSERT INTO `pratique` (idA, idU) VALUES (?,?) ";
	  			$traitement = $db->prepare($SQL);
	  			$traitement->bindparam(1, $idA); 
	  			$traitement->bindparam(2, $_POST['id']);
	  			$traitement->execute();

	  		}
	  	
	  	}
	  	
	  	// ---------------------------------------------------------------------------- //
	  	// ------------------------ KILLLLLL OBJ AND REINSTACY ------------------------ //
	  	// ---------------------------------------------------------------------------- //

	  	$managerU->get($_POST['id']);
        $userUS = $managerU->get(intval($_POST['id']));
     
        $userS = serialize($userUS);
        unset($_SESSION['objUser']);
        $_SESSION['objUser']    = $userS;

    // ----------------------------------------------------------------- //
  	// ------------------------    REDIRECTION  ------------------------ //
  	// ----------------------------------------------------------------- //

    
        if (isset($_GET['go']) && $_GET['go'] = "1") {
        	header('location:../../ajouterUneActiviter.php?to=profilModif');
        }
        else {
        	header('location:../../profilModif.php?modifOK=1');
        	
        }
	  	
	}
	else {
		header('location:../../profilModif.php?modifOK=0');
	} 


    
?>