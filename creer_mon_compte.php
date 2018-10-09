<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php //include 'php/nav.php'; ?>

    <div id="containerFormConnextion" class="">
    	<div class="row">
    		<form class="col offset-s1 s10 offset-l7 l5 fondForm z-depth-4">
    			<h1 class="noMarge">S'inscrire</h1>
			    <div class="row">
			        <div class="input-field col s6">
			          	<input placeholder="Placeholder" id="first_name" type="text" class="validate">
			          	<label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          	<input id="last_name" type="text" class="validate">
			          	<label for="last_name">Last Name</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          	<input disabled value="I am not editable" id="disabled" type="text" class="validate">
			          	<label for="disabled">Disabled</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          	<input id="password" type="password" class="validate">
			          	<label for="password">Password</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="input-field col s12">
			          	<input id="email" type="email" class="validate">
			          	<label for="email">Email</label>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col s12">
			          	This is an inline input field:
			          	<div class="input-field inline">
			            	<input id="email_inline" type="email" class="validate">
			            	<label for="email_inline">Email</label>
			            	<span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
			          	</div>
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
