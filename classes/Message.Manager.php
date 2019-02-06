<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author etudiant
 */
require_once("database.class.php");

class MessageManager {
    //put your code here
    private $db;

    public function __construct($database){
        $this->db=$database;
    }

    public function save(Message $mess){
        $nbRows = 0;
        if ($mess->getId()!=''){
            $query = "select count(*) as nb from `MESSAGE` where `idM`=?";
            $traitement = $this->db->prepare($query);
            $param1=$mess->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){
            $query = "update `MESSAGE` set `textM`=?, `idUEnvoie`=?, `idURecois`=?, idF=? where `idM`=?";
            $traitement = $this->db->prepare($query);
            $param1=$mess->getText();
            $traitement->bindparam(1,$param1);
            $param2=$mess->getIdEnvoie();
            $traitement->bindparam(2,$param2);
            $param3=$mess->getIdRecois();
            $traitement->bindparam(3,$param3);
            $param4=$mess->getIdF();
            $traitement->bindparam(4,$param4);
            $param5=$mess->getId();
            $traitement->bindparam(5,$param5);
            $traitement->execute();
        }else{
            $query = "insert into `MESSAGE` (`textM`, `idUEnvoie`, `idURecois`, idF) values (?,?,?,?)";
            $traitement = $this->db->prepare($query);
            $param1=$mess->getText();
            $traitement->bindparam(1,$param1);
            $param2=$mess->getIdEnvoie();
            $traitement->bindparam(2,$param2);
            $param3=$mess->getIdRecois();
            $traitement->bindparam(3,$param3);
            $param4=$mess->getIdF();
            $traitement->bindparam(4,$param4);
            $traitement->execute();

            return true;
        }
    }

    public function delete(Message $mess){
        $nbRows = 0;
        if ($mess->getId()!=''){
            $query = "select count(*) as nb from `MESSAGE` where `idM`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $mess->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `MESSAGE` where `idM`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $mess->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            return true;
        }else {
            return false;
        }
    }

    public function getList($restriction='WHERE 1'){
        $query = "select * from `MESSAGE` ".$restriction."";
        $messList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $message = new Message($row['textM'],$row['idUEnvoie'],$row['idURecois']);
            $message->setId($row['idM']);
            $messList[] = $message;
        }
        return $messList;
    }

    public function get($id){
        $query = "select * from `MESSAGE` WHERE `idM`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $message = new Message($row['textM'],$row['idUEnvoie'],$row['idURecois']);
        $message->setId($row['idM']);
        return $message;
    }
}
