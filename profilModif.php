<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>
    <div id="profil">
        <div class="container" >
            <div class="row">		
                <h1>Modification du Profil :</h1>
                    
                    <?php 
                        $d = substr($user->getDdn(), 0, 4);
                        $d = date('Y') - $d;   
                        
                    ?>

                    <h2 class="typoLogo"> <?php echo $user->getPseudo(); ?> </h2>
            </div>
            <div class="row">
                <form>
                    <div class="input-field col s6">
                        <input id="ville" name="ville" type="text"  class="validate"    value="<?php echo $user->getVille(); ?>">
                        <label for="ville">Ville</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="mail" name="mail" type="text"    class="validate"    value="<?php echo $user->getMail(); ?>" >
                        <label for="mail">Mail</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="tel" name="tel" type="text"      class="validate"    value="<?php echo $user->getTel(); ?>">
                        <label for="tel">Téléphone</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="dmr" name="dmr" type="text"      class="validate"    value="<?php echo $user->getDistance(); ?>">
                        <label for="dmr">Distance maximum de recherche</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="dmr" name="dmr" type="text"      class="validate">
                        <label for="dmr">Mot de passe</label>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="bio" class="materialize-textarea"> <?php echo $user->getBio(); ?></textarea>
                        <label for="bio">Bio</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s10">
                            <select multiple>
                                <?php
                                    $tabAct = $user->getActivite($user->getId());
                                    
                                    foreach ($tabAct as $key => $objAct) {
                                        echo "<option>";
                                            echo $objAct->getNom(); 
                                        echo "</option >";
                                    }

                                   
                                           
                                ?>
                            </select>
                            <label>Materialize Multiple Select</label>
                        </div>
                        <div class="col s2">
                            <button class="btn" onclick="addActivite();" >Ajouter</button>
                        </div>
                    </div>
                    

                </form>
                        
                    <button class="btn" onclick="saveDonnee($user);" >Modifier</button>
                
                    
                    
            </div>
        </div>
    </div>

    <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>

</body>
</html>
