<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body id="containerFormConnextion">

    <?php //include 'php/nav.php'; ?>

    <div class="">
    	<div class="row">
    		<form action="SaveNewUser.php" method="post" class="col offset-s1 s10 offset-l7 l5 fondForm z-depth-4">
    			<h1 class="noMarge">S'inscrire</h1>
    			<div class="row">
			        <div class="input-field col s10">
			          	<input id="pseudo" name="pseudo" type="text" class="validate" required>
			          	<label for="pseudo">Pseudo *</label>
			        </div>
			        <div id="verifPseudoAjax">

			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="nom" name="nom" type="text" class="validate" required>
			          	<label for="nom">Nom *</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="prenom" name="prenom" type="text" class="validate" required>
			          	<label for="prenom">Prenom *</label>
			        </div>
			    </div>

			    <div class="row">
			    	<div class="input-field col s10">
			          	<input id="email" name="email" type="email" class="validate" required>
			          	<label for="email">Email *</label>
			        </div>
			        <div id="verifMailAjax">

			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s6">
			          	<input id="password" name="password" type="password" class="validate" required>
			          	<label for="password">Mot de passe *</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="passwordV" name="passwordV" type="password" class="validate" required>
			          	<label for="passwordV">Vérification Mot de passe *</label>
			        </div>
			    </div>
			    <div class="row">
			    	<div class="input-field col s6">
			          	<input id="tel" name="tel" type="text" class="validate">
			          	<label for="tel">Téléphone (non afficher publiquement)</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="ville" name="ville" type="text" class="validate" required>
			          	<label for="ville">Ville (afficher publiquement)</label>
			        </div>
			        <div class="input-field col s12">
			          	<input id="distance" name="distance" type="text" class="validate" required>
			          	<label for="distance">Distance de recherche (modifiable par la suite)</label>
			        </div>
			    </div>
          <div class="row">
  			    	<div class="input-field col s12">
                  <label>
                      <input type="checkbox" required />
                      <span>En créant un compte, vous acceptez les <a href="MentionsLegales.php">Conditions générales</a> de Arts Pluriel</span>
                  </label>
    			    </div>
			    </div>
          <div class="row">
              <div class="input-field col s12">
        			    <button type="summit" class="btn right">Valider</button>
              </div>
          </div>
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
