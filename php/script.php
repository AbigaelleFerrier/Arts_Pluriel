<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/script.js"></script>
<script>

  	M.AutoInit();
	
	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.fixed-action-btn');
	    var instances = M.FloatingActionButton.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.scrollspy');
	    var instances = M.ScrollSpy.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.modal');
	    var instances = M.Modal.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.tooltipped');
	    var instances = M.Tooltip.init(elems);
	  });

	$(document).ready(function() {
    	M.updateTextFields();
  	});






	function dieCookie() {
    	// instanceMenu.destroy();
    	document.getElementById('delForDieCookie').innerHTML = "";
    }

  	document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.tap-target');
    	var instances = M.TapTarget.init(elems, { onClose : 'dieCookie()' });
  	});
  
  	// LES COOKIES

    var instanceMenu = M.TapTarget.getInstance(document.getElementById('menuOpen'));
    
    <?php
    	if (isset($_SESSION['user']) &&  ! isset($_SESSION['afficheCookie'])) {
    		echo "instanceMenu.open();";
    		$_SESSION['afficheCookie'] = true;
    	}
    	else {
			echo "dieCookie();";
    	}
    ?>

    // ------ LA GEOLOCALISATION ------ //

    	<?php
    		// ON LOOK SI L'UTILISATEUR EST BIEN UN USER //
    		if (isset($_SESSION['user']) && isset($_SESSION['access']) && $_SESSION['access'] == "limited") {
    	?>

				function saveMaPosition(position) {
					console.log(position.coords.latitude);
					console.log(position.coords.longitude);

					var xhr = new XMLHttpRequest(); 
			        xhr.open("GET", "php/ajax/saveMaPosition.php?LAT="+ position.coords.latitude +"&LONG="+ position.coords.longitude);
			        
			        // xhr.onreadystatechange = function(){
			        //     if (xhr.readyState == 4 && xhr.status == 200){
			        //     }
			        // }
			        xhr.send();
				}

				// Fonction de callback en cas d’erreur
				function erreurPosition(error) {
				    switch(error.code) {
					    case error.TIMEOUT:
					    	M.toast({html: 'Erreur lors de la géolocalisation : #504 Timeout !'});
					    break;
							M.toast({html: 'Si vous n\'acceptez pas la reconnaisance de votre localisation, l\'utilisation de la recherche d\'une personne ne pourra pas fonctionner'});
					    break;
					    case error.POSITION_UNAVAILABLE:
					    	M.toast({html: 'Erreur lors de la géolocalisation : La position n’a pu être déterminée'});
					    break;
					    case error.UNKNOWN_ERROR:
					    	M.toast({html: 'Erreur lors de la géolocalisation : #520 Erreur inconnue'});
					    break;
					    default :
					    	M.toast({html: 'Erreur lors de la géolocalisation : #520-1 Erreur inconnue '});
					    break;
					}
			    }



				if(navigator.geolocation) {
					// Le paramètre maximumAge met en cache la position 
					// pour une durée de 600000 millisecondes (10 minutes), 
					// ainsi la position est mise à jour toutes les 10 minutes au maximum.
					navigator.geolocation.getCurrentPosition(saveMaPosition, erreurPosition,{maximumAge:600000});
				}

		<?php
			}
		?>

	// ------------------------------------------------------- // 

	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});

	//js-scrollTo

</script>