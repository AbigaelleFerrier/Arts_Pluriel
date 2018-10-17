<?php

try {
    include 'php/start.php';
    
    $connexion = database::getDB();
    //la requete compte le nb de ligne correspondant au couple login/mdp
    $req = "select * from UTILISATEUR where mailU=:m and mdpU=MD5(:p);";
    $traitement = $connexion->prepare($req);
    $traitement->bindparam(':m', $_POST['email']);
    $traitement->bindparam(':p', $_POST['password']);
    $traitement->execute();

    if ($ligne=$traitement->fetch()) {
        //alors il y a bien 1 résultat
            $_SESSION['user']       = "client";

        // on mes l'obj client de façon a pouvoir l'utiliser plus tard //
            $user = $mana->get($ligne['idU']);
            $user = serialize($user);
            $_SESSION['objUser']    = $user;
            $_SESSION['access']     = "limited";
        // ---------------------------------------------
            header('location:profil.php');
    } 
    else {
        $req2 ="select * from ADMIN where mailAdm=:m and mdpAdm=MD5(:p);";
        $traitement2 = $connexion->prepare($req2);
        $traitement2->bindparam(':m',$_POST['email']);
        $traitement2->bindparam(':p',$_POST['password']);
        $traitement2->execute();
        if ($ligne=$traitement2->fetch()){
            $_SESSION['user']="admin";
            $_SESSION['access']="ok";
            header('location:adminPanel.php');
        }
        else{
            //aucun résultat pour le couple login/mdp saisi
            $_SESSION['access']="denied";
            header('location:Connexion.php');
        }
    }
}
catch (PDOException $e){
    die("Source : ".$DSN." Erreur : ".$e->getMessage());
}

?>