<?php
	//Si il est connecter
	if(isset($_SESSION['user'])) {

		echo'<li><a href="modication_profil.php">Mon Compte</a></li>';

	}
	else {
		echo'<li><a href="connexion.php">Se connecter</a></li>';
		echo'<li><a href="creer_mon_compte.php">S\'inscrire</a></li>';
	}
?>


