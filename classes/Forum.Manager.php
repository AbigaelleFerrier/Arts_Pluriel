<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Forum
 *
 * @author etudiant
 */
require_once("database.class.php");

class ForumManager {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }
    
    public function save(Forum $f){        
        $nbRows = 0;
        if ($f->getId()!=''){
            $query = "select count(*) as nb from `FORUM` where `idF`=?";
            $traitement = $this->db->prepare($query);
            $param1=$f->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){ 
            $query = "update `FORUM` set `titreF`=? where `idF`=?";
            $traitement = $this->db->prepare($query);
            $param1=$f->getTitre();
            $traitement->bindparam(1,$param1);
            $param2=$f->getId();
            $traitement->bindparam(2,$param2);
            $traitement->execute();
        }else{ 
            $query = "insert into `FORUM` (`titreF`,`idA`) values (?,?)";
            $traitement = $this->db->prepare($query);
            $param1=$f->getTitre();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
        }
    }
    
    public function delete(Forum $f){
        $nbRows = 0;
        if ($f->getId()!=''){                    
            $query = "select count(*) as nb from `FORUM` where `idF`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $f->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `FORUM` where `idF`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $f->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `FORUM` ".$restriction."";
        $fList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $forum = new Forum($row['titreF'],$row['idA']);
            $forum->setId($row['idF']);
            $fList[] = $forum;
        }
        return $fList;   
    }
    
    public function get($id){
        $query = "select * from `FORUM` WHERE `idF`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $forum = new Forum($row['titreF'],$row['idA']);
        $forum->setId($row['idF']);
        return $forum;    
    }
    
    public function getMessage($id){
        $query = "select * from MESSAGE where idF=?";
        $mList = Array();
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $traitement->fetch()){
            $message = new Message($row['textM'],$row['idUEnvoie'],$row['idF']);
            $message->setId($row['idM']);
            $mList[] = $message;
        }
        return $mList; 
    }
}
