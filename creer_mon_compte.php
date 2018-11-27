<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php //include 'php/nav.php'; ?>

    <div id="containerFormConnextion" class="">
    	<div class="row">
    		<form class="col offset-s1 s10 offset-l7 l5 fondForm z-depth-4" action="SaveNewUser.php">
    			<h1 class="noMarge">S'inscrire</h1>
    			<div class="row">
			        <div class="input-field col s10">
			          	<input id="pseudo" name="pseudo" type="text" class="validate">
			          	<label for="pseudo">Pseudo *</label>
			        </div>
			        <div id="verifPseudoAjax">
			        	
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="nom" name="nom" type="text" class="validate">
			          	<label for="nom">Nom *</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="prenom" name="prenom" type="text" class="validate">
			          	<label for="prenom">Prenom *</label>
			        </div>
			    </div>

			    <div class="row">
			    	<div class="input-field col s10">
			          	<input id="email" name="email" type="email" class="validate">
			          	<label for="email">Email *</label>
			        </div>
			        <div id="verifMailAjax">
			        	
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="password" name="password" type="password" class="validate">
			          	<label for="password">Mot de passe *</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="passwordV" name="passwordV" type="password" class="validate">
			          	<label for="passwordV">Vérification Mot de passe *</label>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="input-field col s6">
			          	<input id="tel" name="tel" type="text" class="validate">
			          	<label for="tel">Téléphone (afficher publiquement)</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="ville" name="ville" type="text" class="validate">
			          	<label for="ville">Ville (afficher publiquement)</label>
			        </div>
			        <div class="input-field col s12">
			          	<input id="distance" name="distance" type="text" class="validate">
			          	<label for="distance">Distance de recherche (modifiable par la suite)</label>
			        </div>
			    </div>
			    
			    <button type="summit" class="btn right">Valider</button>
			</form>
			<a href="https://unsplash.com/" class="right">Image: unsplash.com</a>


    		   		
    	</div>
    </div>

    <?php
        //include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
