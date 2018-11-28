<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActiviteManager
 *
 * @author etudiant
 */
require_once("database.class.php");

class ActiviteManager {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }
    
    public function save(Activite $act){        
        $nbRows = 0;
        if ($act->getId()!=''){
            $query = "select count(*) as nb from `ACTIVITE` where `idA`=?";
            $traitement = $this->db->prepare($query);
            $param1=$act->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }
        if ($nbRows > 0){ 
            $query = "update `ACTIVITE` set `nomA`=? where `idA`=?";
            $traitement = $this->db->prepare($query);
            $param1=$act->getNom();
            $traitement->bindparam(1,$param1);
            $param2=$act->getId();
            $traitement->bindparam(2,$param2);
            $traitement->execute();
        }else{ 
            $query = "insert into `ACTIVITE` (`nomA`) values (?)";
            $traitement = $this->db->prepare($query);
            $param1=$act->getNom();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
        }
    }
    
    public function delete(Activite $act){
        $nbRows = 0;
        if ($act->getId()!=''){                    
            $query = "select count(*) as nb from `ACTIVITE` where `idA`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $act->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `ACTIVITE` where `idA`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $act->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `ACTIVITE` ".$restriction."";
        $actList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $activite = new Activite($row['nomA']);
            $activite->setId($row['idA']);
            $actList[] = $activite;
        }
        return $actList;   
    }
    
    public function get($id){
        $query = "select * from `ACTIVITE` WHERE `idA`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        $row = $traitement->fetch();
        $activite = new Activite($row['nomA']);
        $activite->setId($row['idA']);
        return $activite;    
    }
    
    public function getListeLieu($id){ //donne la liste des lieux où pratiquer une activité
        $query = "select st.idL,labelL,telL,adresseL,idA from `se_trouver` st,LIEUX l where st.idL = l.idL and idA=".$id." ";
        $LieuList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $lieu = new Lieux($row['labelL'],$row['telL'],"",$row['adresseL']);
            $lieu->setId($row['idL']);
            $LieuList[] = $lieu;
        }
        return $LieuList; 
    }
    
    public function getListeUser($id){ //donne la liste des utilisateur pratiquant l'activité
        $query = "select p.idU,pseudoU,	villeU,ddnU,idA from `pratique` p, UTILISATEUR u where p.idU = u.idU and idA=".$id." ";
        $UserList = Array();
        try{
            $result = $this->db->Query($query);
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
        while ($row = $result->fetch()){
            $user = new Utilisateur("",$row['pseudoU'],"","","","",$row['villeU'],"","",$row['ddnU'],"","","","");
            $user->setId($row['idU']);
            $UserList[] = $user;
        }
        return $UserList; 
    }
}
