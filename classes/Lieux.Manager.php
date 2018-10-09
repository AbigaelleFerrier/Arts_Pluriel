<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lieux
 *
 * @author etudiant
 */
require_once("database.class.php");

class Lieux {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }
    
    public function save(Lieux $lieu){        
        $nbRows = 0;
        if ($lieu->getId()!=''){
            $query = "select count(*) as nb from `LIEUX` where `idL`=?";
            $traitement = $this->db->prepare($query);
            $param1=$lieu->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){ 
            $query = "update `LIEUX` set `labelL`=?, `telL`=?, `villeL`=?, `adresseL`=? where `idL`=?";
            $traitement = $this->db->prepare($query);
            $param1=$lieu->getLabel();
            $traitement->bindparam(1,$param1);
            $param2=$lieu->getTel();
            $traitement->bindparam(2,$param2);
            $param3=$lieu->getVille();
            $traitement->bindparam(3,$param3);
            $param4=$lieu->getAdresse();
            $traitement->bindparam(4,$param4);
            $param5=$lieu->getId();
            $traitement->bindparam(5,$param5);
            $traitement->execute();
        }else{ 
            $query = "insert into `LIEUX` (`labelL`, `telL`, `villeL`, `adresseL`) values (?,?,?,?)";
            $traitement = $this->db->prepare($query);
            $param1=$lieu->getLabel();
            $traitement->bindparam(1,$param1);
            $param2=$lieu->getTel();
            $traitement->bindparam(2,$param2);
            $param3=$lieu->getVille();
            $traitement->bindparam(3,$param3);
            $param4=$lieu->getAdresse();
            $traitement->bindparam(4,$param4);
            $param5=$lieu->getId();
            $traitement->bindparam(5,$param5);
            $traitement->execute();
        }
    }
    
    public function delete(Lieux $lieu){
        $nbRows = 0;
        if ($lieu->getId()!=''){                    
            $query = "select count(*) as nb from `LIEUX` where `idL`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $lieu->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `LIEUX` where `idL`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $lieu->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `LIEUX` ".$restriction."";
        $lieuList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $lieux = new Lieux($row['labelL'],$row['telL'],$row['villeL'],$row['adresseL']);
            $lieux->setId($row['idL']);
            $lieuList[] = $lieux;
        }
        return $lieuList;   
    }
    
    public function get($id){
        $query = "select * from `LIEUX` WHERE `idL`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $lieux = new Lieux($row['labelL'],$row['telL'],$row['villeL'],$row['adresseL']);
        $lieux->setId($row['idL']);
        return $lieux;    
    }
}
