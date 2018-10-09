
    <nav class="white nav-extended scrollspy" role="navigation" id="nav">

        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo typoLogo">Arts Pluriel</a>
            
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
                    echo '<li class="tab"><a href="rechercher_un_lieux_activiter.php">Rechercher une personnne</a></li>';
                }
                else {
                    echo '<li class="tab"><a href="#!" class="disbled disabledLi tooltipped"  data-position="bottom" data-tooltip="Vous devez être connecter">Rechercher une personnne</a></li>';
                }
            ?>

            
          </ul>
        </div>
    </nav>
