<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div id="index-banner" class="parallax-container heightHome">
        <div class="section no-pad-bot">
            <div class="container homeFond z-depth-4">
                    <div class="row center headerRow">
                        <h1 class ="header center teal-text text-lighten-2 typoLogo"
                        style ="  margin-top    : 3vw;
                                  padding-top   : 2vw;
                                  margin-bottom : 0vw;"
                        >Arts Pluriel</h1>
                    </div>
                    <div class="row center">
                        <h5 class="header col s12 light">Un monde, des passions</h5>
                        <p class="header col s12">De l'art a votre passion pour le trico accrobatique ! Une infiniter de posibiliter s'offre a vous pour découvrir, partagé, créé...
                        </p>
                    </div>

                <div class="row center">
                    <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Get Started</a>                </div>
                <br><br>
            </div>
        </div>



        <div id="parallax" class="parallax">
            <img id="homeImg" class="fadeIn" src="images/bg/bg1.jpg" alt="Unsplashed background img 1">
        </div>
    </div>


    <div class="container" id="start">
        <div class="section justify">
            <h1 class="typoLogo teal-text">Lorem</h1>
            <div class="row">
                <div class="row col s10">
                    <div class="row">
                        <div class="col s12">
                            <p class="justify">Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <b>commodo consequat</b>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<b> officia deserunt mollit anim</b> id est laborum.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <h3 class="typoLogo teal-text">Lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="col s6">
                            <h3 class="typoLogo teal-text">Lorem</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row col s2">
                      <div class="col s12">
                          <p class="justify F100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation officia deserunt mollit anim id est laborum.
                          </p>
                      </div>
                </div>

                <div class="row col s12">
                    <div class="row">
                        <div class="col s4">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="http://picsum.photos/720/480/?random">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                       I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="http://picsum.photos/720/480/?random">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                       I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="http://picsum.photos/720/480/?random">
                                    <span class="card-title">Card Title</span>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.
                                       I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="typoLogo teal-text">Lorem</h3>
                        <div class="col s4">
                            <img src="http://picsum.photos/720/480/?random" class="responsive-img">
                        </div>
                        <div class="col s8">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="images/bg/bg1.jpg"></div>
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
