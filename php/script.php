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
	    var instances = M.FloatingActionButton.init(elems, options);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.scrollspy');
	    var instances = M.ScrollSpy.init(elems, options);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.modal');
	    var instances = M.Modal.init(elems, options);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.tooltipped');
	    var instances = M.Tooltip.init(elems, options);
	  });

	$(document).ready(function() {
    	M.updateTextFields();
  	});


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