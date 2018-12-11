<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

   <div class="container" style="height: -webkit-fill-available">
   	<h2 style="margin-top: 5vw">Ajouter votre activiter a la base</h2>
   		<form action="php/form/ajoutActiviter?to=<?php echo($_GET['to']); ?>" method="post">
   			<div class="row">
		        <div class="input-field col s12 m10">
		        	<input placeholder="Exemple : dessin, couture, jeux de carte..." id="activiter" name="activiter" type="text" class="validate" required="">
		        	<label for="activiter">Nom de l'activiter</label>
		        </div>
		        <div class="input-field col s12 m2">
		        	<button type="sumbit" class="btn">Enregistre</button>
		        </div>
		    </div>
   		</form>
   		<div class="row">
   			<h4>Gestion et modération :</h4>
   			<div class="col s12">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   			</div>
   			<div class="col s8">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   			</div>
   			<div class="col s4">
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
   			</div>
   		</div>
   		
   </div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
