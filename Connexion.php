<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php //include 'php/nav.php'; ?>

    <div id="containerFormConnextion" class="">
    	<div class="row">
    		<form class="col offset-s1 s10 offset-l7 l5 fondForm z-depth-4">
    			<h1 class="noMarge">Se connecter</h1>
			    
			    <div class="row">
			        <div class="input-field col s12">
			          	<input id="email" type="email" class="validate">
			          	<label for="email">Email</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          	<input id="password" type="password" class="validate">
			          	<label for="password">Password</label>
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
