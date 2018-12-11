<?php

require_once 'classes/incluDesClasses.php';
$ctMs = $_POST['contenuTxt'];
$managerM = new MessageManager(database::getDB());

$idEnvoie = $_GET['id'];
$idUserCourant = $_GET['idUser'];

$mes = new Message($ctMs,$idEnvoie,$idUserCourant);
$managerM->save($mes);

header('location:message.php?id='.$idEnvoie.'&idUser='.$idUserCourant);

?>