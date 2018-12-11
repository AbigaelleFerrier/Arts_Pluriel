<?php

require_once 'classes/incluDesClasses.php';
$ctMs = $_POST['contenuTxt'];
$managerM = new MessageManager(database::getDB());

$idEnvoie = null;
$idUserCourant = $_GET['idUser'];
$idF = $_GET['idF'];

$mes = new Message($ctMs,$idEnvoie,$idUserCourant,$idF);
$managerM->save($mes);

header('location:discussion.php?id='.$idF);

?>