<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2"><i class="fas fa-terminal"></i> Portfolio</h1>
                
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            
            <div class="row center">
                <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Get Started</a>
            </div>
            <br><br>
        </div>
    </div>



    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container" id="start">
        <div class="section">

            <div class="row">
                <div class="col s12">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s2">
                              <img src="images/moi.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                            </div>

                            <div class="col s10">
                                <h3>Cirill Ferrier</h3>
                                <span class="black-text">
                                    Auto-entrepreneur & étudiant en Bts Sio
                                </span>

                                <div class="progress">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                                <div class="progress">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Speeds up development</h5>

                        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">User Experience Focused</h5>

                        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Easy to work with</h5>

                        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                    </div>
                </div>
            </div>
            <!--   // Icon Section   -->

            <!-- PortFolio -->
            <div class="row" id="PortFolio">
                <hr>
                <h3><blockquote>Projet :</blockquote></h3>

                <!-- MGVPC -->

                <a class="modal-trigger" href="#modal1">
                    <div class="col s6">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="images/warehouse.jpg">
                                <span class="card-title">MGVPC</span>
                            </div>
                            
                            <div class="card-content">
                                <p>Les personnes chargées de préparer les commandes doivent pouvoir via une application sur leur téléphone obtenir le meilleur trajet possible pour récupérer les différents éléments.</p>
                                
                                <div class="icon-card-i">
                                    <i class="fab fa-android fa-2x"></i>
                                    <i class="fab fa-php     fa-2x"></i>
                                    <i class="fab fa-gitkraken fa-2x"></i>
                                </div>
                                    
                                
                            </div>

                            <!-- <div class="card-action">
                              <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Lire</a>
                            </div> -->
                        </div>
                    </div>
                </a>


                <!-- ART PLURIEL -->

                <a class="modal-trigger" href="#ArtsPluriel">
                    <div class="col s6">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="images/logoArtsPluriel.png">
                                <span class="card-title">Arts Pluriel</span>
                            </div>
                            
                            <div class="card-content">
                                <p>L'association Arts Pluriel souhaite une solution pour mettre en relation musiciens, artistes, photographes...</p>
                                
                                <div class="icon-card-i">
                                    <i class="fab fa-html5 fa-2x"></i>
                                    <i class="fab fa-css3  fa-2x"></i>
                                    <i class="fab fa-js    fa-2x"></i>
                                    <i class="fab fa-php   fa-2x"></i>
                                    <i class="fab fa-gitkraken fa-2x"></i>
                                </div>
                                    
                                
                            </div>

                            <!-- <div class="card-action">
                              <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Lire</a>
                            </div> -->
                        </div>
                    </div>
                </a>

                <!-- FATY CONCEPT -->
                
            </div>
            <div class="row" id="Stage">
            </div>
        </div>
    </div>



<?php
    include 'php/pageModal.php';
    include 'php/footer.php';
    include 'php/script.php';
?>



</body>
</html>
