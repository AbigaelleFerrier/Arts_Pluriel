<?php

require_once 'classes/incluDesClasses.php';
$ctMs = $_POST['contenuTxt'];
$managerM = new MessageManager(database::getDB());

$idEnvoie = $_GET['id'];
$idUserCourant = $_GET['idUser'];
$idF = null;

$mes = new Message($ctMs,$idEnvoie,$idUserCourant,$idF);
$managerM->save($mes);

header('location:message.php?id='.$idEnvoie.'&idUser='.$idUserCourant);

?>