<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author etudiant
 */
require_once("database.class.php");

class Utilisateur {
    //put your code here
    private $db;
    
    public function __construct($database)
    {
        $this->db=$database;
    }
    public function save(utilisateur $user){        
        $nbRows = 0;
        if ($user->getId()!=''){
            $query = "select count(*) as nb from `UTILISATEUR` where `idU`=?";
            $traitement = $this->db->prepare($query);
            $param1=$user->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0)
        { //$idU, $pseudoU, $nomU, $prenomU, $mailU, $telU, $adresseU, $villeU, $distanceU, $mdpU, $ddnU, $bioU
            $query = "update `UTILISATEUR` set `pseudoU`=?, `nomU`=?, `prenomU`=?,`mailU`=?, `telU`=?, `adresseU`=?, `villeU`=?, `distance`=?, `mdpU`=?,`ddnU`=?, `bioU`=? where `idU`=?;";
            $traitement = $this->db->prepare($query);
            $param1=$user->getPseudo();
            $traitement->bindparam(1,$param1);
            $param2=$user->getNom();
            $traitement->bindparam(2,$param2);
            $param3=$user->getPrenom();
            $traitement->bindparam(3,$param3);
            $param4=$user->getMail();
            $traitement->bindparam(4,$param4);
            $param5=$user->getTel();
            $traitement->bindparam(5,$param5);
            $param6=$user->getAdresse();
            $traitement->bindparam(6,$param6);
            $param7=$user->getVille();
            $traitement->bindparam(7,$param7);
            $param8=$user->getDistance();
            $traitement->bindparam(8,$param8);
            $param9=$user->getMdp();
            $traitement->bindparam(9,$param9);
            $param10=$user->getDdn();
            $traitement->bindparam(10,$param10);
            $param11=$user->getBio();
            $traitement->bindparam(11,$param11);
            $param12=$user->getId();
            $traitement->bindparam(12,$param12);
            $traitement->execute();
        }else{ 
            //
            //t'en es là 
            //
            $query = "insert into `produit` (`libProd`, `descProd`,`prixProd`) values (?,?,?);";
            $traitement = $this->db->prepare($query);
            $param1=$prod->getLib();
            $traitement->bindparam(1,$param1);
            $param2=$prod->getDesc();
            $traitement->bindparam(2,$param2);
            $param3=$prod->getPrix();
            $traitement->bindparam(3,$param3);            
            $traitement->execute();
        }
    }
        
}
