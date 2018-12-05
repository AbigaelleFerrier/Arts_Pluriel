

	<!DOCTYPE html>
	<html lang="fr">

	        <?php include'php/head.php'; ?>

<?php

if ( $_SESSION['user'] == "client") {
?>
	<body>

	    <?php include 'php/nav.php'; ?>
	    <div id="profil">
	        <div class="container" >
	            <div class="row">		
	                <h1>Modification du Profil : <span class="typoLogo" style="font-size: 3vw"><?php echo $user->getPseudo(); ?></span></h1>
	                    
	                    <?php 
	                        $d = substr($user->getDdn(), 0, 4);
	                        $d = date('Y') - $d;   
	                        
	                    ?>
	            </div>
	            <div class="row">
	                <form id="form" action="php/form/mdf_info_user.php?id=<?php echo($user->getId()) ?>" method="post">
	                	<input style="display: none" type="text" name="id" value="<?php echo $user->getId() ?>">
	                    <div class="input-field col s6">
	                        <input id="ville" name="ville" type="text"  class="validate"    value="<?php echo $user->getVille(); ?>">
	                        <label for="ville">Ville</label>
	                    </div>
	                    <div class="input-field col s6">
	                        <input id="mail" name="mail" type="text"    class="validate"    value="<?php echo $user->getMail(); ?>" >
	                        <label for="mail">Mail</label>
	                    </div>
	                    <div class="input-field col s6">
	                        <input id="tel" name="tel" type="text"      class="validate"    value="<?php echo $user->getTel(); ?>">
	                        <label for="tel">Téléphone</label>
	                    </div>
	                    <div class="input-field col s6">
	                        <input id="dmr" name="dmr" type="text"      class="validate"    value="<?php echo $user->getDistance(); ?>">
	                        <label for="dmr">Distance maximum de recherche</label>
	                    </div>
	                    <div class="input-field col s6">
	                        <input id="mdp" name="mdp" type="text"      class="validate">
	                        <label for="mdp">Mot de passe</label>
	                    </div>

	                    <div class="input-field col s12">
	                        <textarea id="bio" name="bio" class="materialize-textarea"> <?php echo $user->getBio(); ?></textarea>
	                        <label for="bio">Bio</label>
	                    </div>

	                    <div class="row">
	                        <div class="input-field col s10">
	                            <select multiple name="activiter[]">
	                                <?php
	                                    $tabAct = $user->getActivite($user->getId());
										$whereNoIn = "WHERE 1";
	                                   
	                                    foreach ($tabAct as $key => $objAct) {
	                                    	/* ----------------------------------------------------------------------------- */
	                                    	// Recup les diff id pour cree un "where" qui ne prend pas les id deja activiver //
	                                    	/* ----------------------------------------------------------------------------- */
		                                    	if ($key == 0) {
		                                    		$whereNoIn = "Where ";
		                                    	}

		                                    	$whereNoIn .= "idA <> ". $objAct->getId() . "  ";

		                                    	if ($key != count($tabAct) -1) {
		                                    		$whereNoIn .= "And ";
		                                    	}
	                                    	/* ------------ */
	                                        echo '<option value="'.  $objAct->getId().'" selected>';
	                                            echo $objAct->getNom(); 
	                                        echo "</option >";
	                                    }

	                                    foreach ($managerAct->getList($whereNoIn) as $key => $objAct) {
	                                    	echo '<option  value="'.  $objAct->getId().'">';
	                                            echo $objAct->getNom(); 
	                                        echo "</option >";
	                                    }
	                                ?>
	                            </select>
	                            <label>Activiter</label>
	                        </div>
	                        <div class="col s2">
	                            <a class="btn" onclick="btnAjouter()" >Ajouter</a>
	                        </div>
	                    </div>
	                    
	                    <button type="submit" class="btn" id="Enregistre" >Modifier</button>
	                </form>
	                
	                

	            </div>
	        </div>
	    </div>
	         
	    <?php
	        include 'php/footer.php';
	        include 'php/script.php';
	    ?>

	    <script type="text/javascript">
        	function btnAjouter() {
        		document.getElementById('form').action   += "&go=1";
        		document.getElementById('Enregistre').click();
        	}
        	<?php
        		if 		(isset($_GET['modifOK']) && $_GET['modifOK'] = "1") {
        					echo "M.toast({html: 'Enregistrées', displayLength : 100000});";
        		}
        		else if (isset($_GET['modifOK']) && $_GET['modifOK'] = "0") {
        					echo "M.toast({html: 'Une erreur c'est produite. Si l'erreur perciste, merci de contacter l'admin});";
        		}
        	?>
	    </script>
	   
	</body>
	</html>
<?php

}
else {
	header('location:Connexion.php');
}
?>