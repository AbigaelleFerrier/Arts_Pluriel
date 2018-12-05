
    <nav class="white nav-extended scrollspy" role="navigation" id="nav">

        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo typoLogo">Arts Pluriel</a>
            
            <ul class="right hide-on-med-and-down">
                <?php include 'sous-nav.php' ?>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <?php include 'sous-nav.php' ?>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> 
        </div>

        <div class="nav-content container center">
          <ul class="tabs tabs-transparent">
            <li class="tab"> <a href="rechercher_un_lieux_activiter.php">Rechercher un lieux</a></li>

            <?php
                if(isset($_SESSION['user'])) {
                    echo '<li class="tab"><a href="rechercher_une_personne.php">Rechercher une personnne</a></li>';
                    echo '<li class="tab"><a href="forum.php">Forum</a></li>';
                }
                else {
                    echo '<li class="tab"><a href="#!" class="disbled disabledLi tooltipped"  data-position="bottom" data-tooltip="Vous devez être connecté">Rechercher une personnne</a></li>';
                    echo '<li class="tab"><a href="#!" class="disbled disabledLi tooltipped" data-position="botton" data-tooltip="Vous devez être connecté">Forum</a></li>';
                }
            ?>

            
          </ul>
        </div>
    </nav>


    <!-- Element Showed -->
    <div id="delForDieCookie">
        <a id="menu" class="waves-effect waves-light btn btn-floating" onclick="//dieCookie(0)"><i class="material-icons">menu</i></a>
    </div>
        


    <!-- Tap Target Structure -->
        <div id="menuOpen" class="tap-target" data-target="menu" >
            <div class="tap-target-content" style="border-radius: 100%">
                <h5 style="visibility: visible; color: #fff; text-align: right;">Miams les Cookies</h5>
                <p  style="visibility: visible; color: #fff; text-align: right;">Les cookies c'est bien mais que dans l'estomac ! Depuis le 25 Mai 2018, Arts Pluriel n'utilise plus de cookie pour stocker vos données. Pour plus d'information : consulter nos Mentions Légales</p>
            </div>
        </div>
