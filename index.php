<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-2">Arts Pluriel</h1>
                    
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                
                <div class="row center">
                    <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Get Started</a>
                </div>
                <br><br>
            </div>
        </div>



        <div class="parallax">
            <img id="homeImg" class="fadeIn" src="images/bg/bg1.jpg" alt="Unsplashed background img 1">

            <script type="text/javascript">
                var i = 1;
                var j = 0;
                var idInter=setInterval('demarage();',3000);

                function demarage() {
                    obj = document.getElementById('homeImg');
                    obj.setAttribute("src", "images/bg/bg"+i+".jpg");
                    i++;
                    if (i==6) {i=1}
                    //obj.setAttribute("class", "fadeIn"+j);
                   obj.style.webkitAnimationPlayState="running";

                    
                }

                function getRandomInt(max) {
                    return Math.floor(Math.random() * Math.floor(max));
                }
            </script>

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



</body>
</html>
