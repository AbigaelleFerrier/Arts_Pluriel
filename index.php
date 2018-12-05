<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container homeFond z-depth-4">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-2 typoLogo">Arts Pluriel</h1>
                    
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                
                <div class="row center">
                    <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Get Started</a>
                </div>
                <br><br>
            </div>
        </div>



        <div id="parallax" class="parallax">
            <img id="homeImg" class="fadeIn" src="images/bg/bg1.jpg" alt="Unsplashed background img 1">
        </div>
    </div>


    <div class="container" id="start">
        <div class="section">

                      
        </div>
    </div>



    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

    <script type="text/javascript">
        var elem = document.getElementById("parallax");
        var obj  = document.getElementById("homeImg"); 
        var opacity = 1;
        var i = true;
        var image = 2;
        var id = setInterval('frame();',60);
        
        function frame() {
            if (i) {
                if (opacity <= 0) {
                    i = false;
                    opacity = 0;
                    obj.setAttribute("src", "images/bg/bg"+image+".jpg");
                    
                    image++;
                    if (image > 5) {image=1;}
                   
                } 
                else {
                    opacity -= 0.01; 
                    elem.style.opacity = opacity;
                }
            }
            else {
                if (opacity  >= 1) {
                    i = true;
                    opacity = 1;
                   
                    
                } 
                else {
                    opacity += 0.03 
                    elem.style.opacity = opacity ; 
                    
                }
            }
        }
    </script>            
</body>
</html>
