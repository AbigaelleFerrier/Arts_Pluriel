<?php
	//Si il est connecter
	if(isset($_SESSION['user']) && $_SESSION['user'] == "client") {
                echo'<li><a href="messagerie.php">Messagerie</a></li>';
                echo'<li><a href="profil.php">Mon Compte</a></li>';
                echo '<li><a href="deconnexion.php">Déconnexion</a></li>';

	}
	else if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){
        echo'<li><a href="adminPanel.php">Pannel d\'administration</a></li>';
        echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
    }
	else {
		echo'<li><a href="connexion.php">Se connecter</a></li>';
		echo'<li><a href="creer_mon_compte.php">S\'inscrire</a></li>';
	}
?>


