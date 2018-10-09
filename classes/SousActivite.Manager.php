<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SousActivite
 *
 * @author etudiant
 */
require_once("database.class.php");

class SousActiviteManager {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }
    
    public function save(SousActivite $SA){        
        $nbRows = 0;
        if ($SA->getId()!=''){
            $query = "select count(*) as nb from `SOUS_ACTIVITER` where `idP`=?";
            $traitement = $this->db->prepare($query);
            $param1=$SA->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){ 
            $query = "update `SOUS_ACTIVITER` set `specialite`=?, `idA`=? where `idP`=?";
            $traitement = $this->db->prepare($query);
            $param1=$SA->getSpecialite();
            $traitement->bindparam(1,$param1);
            $param2=$SA->getIda();
            $traitement->bindparam(2,$param2);
            $param3=$SA->getId();
            $traitement->bindparam(3,$param3);
            $traitement->execute();
        }else{ 
            $query = "insert into `SOUS_ACTIVITER` (`specialite`, `idA`) values (?,?)";
            $traitement = $this->db->prepare($query);
            $param1=$SA->getSpecialite();
            $traitement->bindparam(1,$param1);
            $param2=$SA->getIda();
            $traitement->bindparam(2,$param2);
            $traitement->execute();
        }
    }
    
    public function delete(SousActivite $SA){
        $nbRows = 0;
        if ($SA->getId()!=''){                    
            $query = "select count(*) as nb from `SOUS_ACTIVITER` where `idP`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $SA->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `SOUS_ACTIVITER` where `idP`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $SA->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `SOUS_ACTIVITER` ".$restriction."";
        $SAList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $SousActivite = new SousActivite($row['specialite'],$row['idA']);
            $SousActivite->setId($row['idP']);
            $SAList[] = $SousActivite;
        }
        return $SAList;   
    }
    
    public function get($id){
        $query = "select * from `SOUS_ACTIVITER` WHERE `idP`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $SousActivite = new SousActivite($row['specialite'],$row['idA']);
        $SousActivite->setId($row['idP']);
        return $SousActivite;    
    }
}
