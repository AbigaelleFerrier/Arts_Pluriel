<?php
	//Si il est connecter
	if(isset($_SESSION['user'])) {

		echo'<li><a href="profil.php?id='. $user->getId() .'">Mon Compte</a></li>';
                echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
	}
	else {
		echo'<li><a href="connexion.php">Se connecter</a></li>';
		echo'<li><a href="creer_mon_compte.php">S\'inscrire</a></li>';
	}
?>


