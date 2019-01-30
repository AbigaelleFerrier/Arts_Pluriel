<?php

require_once 'classes/incluDesClasses.php';
if ($_POST['contenuTxt'] != "") {
    $ctMs = $_POST['contenuTxt'];
    $managerM = new MessageManager(database::getDB());

    $idEnvoie = $_GET['id'];
    $idUserCourant = $_GET['idUser'];
    $idF = null;

    $mes = new Message($ctMs,$idEnvoie,$idUserCourant,$idF);
    $managerM->save($mes);
}
header('location:messagerie.php?id='.$idEnvoie.'&idUser='. $idUserCourant );

?>
