<?php

require_once 'classes/incluDesClasses.php';
if ($_POST['contenuTxt'] != "") {
    $order   = array("\r\n", "\n", "\r");
    $ctMs = str_replace($order, '<br>',$_POST['contenuTxt']);
    $managerM = new MessageManager(database::getDB());

    $idEnvoie = $_GET['id'];
    $idUserCourant = $_GET['idUser'];
    $idF = null;

    $mes = new Message($ctMs,$idEnvoie,$idUserCourant,$idF);
    $managerM->save($mes);
    echo $ctMs;
}
?>
