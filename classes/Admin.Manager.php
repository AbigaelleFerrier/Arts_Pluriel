<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author etudiant
 */
require_once("database.class.php");

class Admin {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }
    
    public function save(Admin $adm){        
        $nbRows = 0;
        if ($adm->getId()!=''){
            $query = "select count(*) as nb from `ADMIN` where `idAdm`=?";
            $traitement = $this->db->prepare($query);
            $param1=$lieu->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){ 
            $query = "update `ADMIN` set `pseudo`=?, `mdpAdm`=?, `mailAdm`=? where `idAdm`=?";
            $traitement = $this->db->prepare($query);
            $param1=$adm->getPseudo();
            $traitement->bindparam(1,$param1);
            $param2=$adm->getMdp();
            $traitement->bindparam(2,$param2);
            $param3=$adm->getMail();
            $traitement->bindparam(3,$param3);
            $param4=$adm->getId();
            $traitement->bindparam(4,$param4);
            $traitement->execute();
        }else{ 
            $query = "insert into `ADMIN` (`pseudo`, `mdpAdm`, `mailAdm`) values (?,?,?)";
            $traitement = $this->db->prepare($query);
            $param1=$adm->getPseudo();
            $traitement->bindparam(1,$param1);
            $param2=$adm->getMdp();
            $traitement->bindparam(2,$param2);
            $param3=$adm->getMail();
            $traitement->bindparam(3,$param3);
            $param4=$adm->getId();
            $traitement->bindparam(4,$param4);
            $traitement->execute();
        }
    }
    
    public function delete(Admin $adm){
        $nbRows = 0;
        if ($adm->getId()!=''){                    
            $query = "select count(*) as nb from `ADMIN` where `idAdm`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $adm->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `ADMIN` where `idAdm`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $adm->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `ADMIN` ".$restriction."";
        $admList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $admin = new Admin($row['pseudo'],$row['mdpAdm'],$row['mailMdp']);
            $admin->setId($row['idAdm']);
            $admList[] = $admin;
        }
        return $admList;   
    }
    
    public function get($id){
        $query = "select * from `ADMIN` WHERE `idAdm`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $admin = new Admin($row['pseudo'],$row['mdpAdm'],$row['mailAdm']);
        $admin->setId($row['idAdm']);
        return $admin;    
    }
}
