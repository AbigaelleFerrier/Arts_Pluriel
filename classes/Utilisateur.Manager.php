<?php

require_once("database.class.php");
require_once("Activite.class.php");
require_once("Activite.Manager.php");

class UtilisateurManager {
    //put your code here
    private $db;
    
    public function __construct($database){
        $this->db=$database;
    }

    public function save(Utilisateur $user){
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
        if ($nbRows > 0){ 
            $query = "update `UTILISATEUR` set `pseudoU`=?, `nomU`=?, `prenomU`=?,`mailU`=?, `telU`=?, `villeU`=?, `distanceU`=?, `mdpU`=?,`ddnU`=?, `bioU`=?,`LAT`=?, `LONG`=? where `idU`=?";
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
            $param6=$user->getVille();
            $traitement->bindparam(6,$param6);
            $param7=$user->getDistance();
            $traitement->bindparam(7,$param7);
            $param8=$user->getMdp();
            $traitement->bindparam(8,$param8);
            $param9=$user->getDdn();
            $traitement->bindparam(9,$param9);
            $param10=$user->getBio();
            $traitement->bindparam(10,$param10);
            $param11=$user->getLat();
            $traitement->bindparam(11,$param11);
            $param12=$user->getLong();
            $traitement->bindparam(12,$param12);
            $param13=$user->getId();
            $traitement->bindparam(13,$param13);
            $traitement->execute();
        }else{ 
            $query = "insert into `UTILISATEUR` (`pseudoU`, `nomU`,`prenomU`,`mailU`, `telU`,`villeU`,`distanceU`, `mdpU`,`ddnU`,`bioU`, `LAT`,`LONG`) "
                    . "values (?,?,?,?,?,?,?,?,?,?,?,?)";
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
            $param6=$user->getVille();
            $traitement->bindparam(6,$param6);
            $param7=$user->getDistance();
            $traitement->bindparam(7,$param7);
            $param8=$user->getMdp();
            $traitement->bindparam(8,$param8);
            $param9=$user->getDdn();
            $traitement->bindparam(9,$param9);
            $param10=$user->getBio();
            $traitement->bindparam(10,$param10);
            $param11=$user->getLat();
            $traitement->bindparam(11,$param11);
            $param12=$user->getLong();
            $traitement->bindparam(12,$param12);            
            $traitement->execute();
        }
    }
    
    public function delete(Utilisateur $user){
        $nbRows = 0;
        if ($user->getId()!=''){                    
            $query = "select count(*) as nb from `UTILISATEUR` where `idU`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $user->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();
            $ligne = $traitement->fetch();
            $nbRows=$ligne[0];
        }if ($nbRows > 0){
            $query = "delete from `UTILISATEUR` where `idU`=?";
            $traitement = $this->db->prepare($query);
            $param1 = $user->getId();
            $traitement->bindparam(1,$param1);
            $traitement->execute();            
            return true;
        }else {
            return false;
        }
    }
    
    public function getList($restriction='WHERE 1'){
        $query = "select * from `UTILISATEUR` ".$restriction."";
        $userList = Array();
        try{
            $result = $this->db->Query($query);
            while ($row = $result->fetch()){
                // Activiter
                    $query = "select * from `pratique` WHERE `idU`=?";
                    try{
                        $traitementPratique = $this->db->prepare($query);
                        $traitementPratique ->bindparam(1,$row['idU']);
                        $traitementPratique ->execute();
                    }
                    catch(PDOException $e){
                        die ("Erreur : ".$e->getMessage());
                    }
                    
                    while ($rowActiviter = $traitementPratique->fetch()) {
                        $activite = new Activite($rowActiviter['nomA']);
                        $activite->setId($rowActiviter['idA']);
                        $actList[] = $activite;
                    }
                // Creation d'utilisateur  
                    $utilisateur = new Utilisateur( $row['idU'],$row['pseudoU'],
                                                    $row['nomU'],$row['prenomU'],
                                                    $row['mailU'],$row['telU'],
                                                    $row['villeU'],$row['distanceU'],
                                                    $row['mdpU'],$row['ddnU'],
                                                    $row['bioU'],
                                                    $row['LAT'],$row['LONG'],
                                                    $actList );

                    $utilisateur->setId($row['idU']);
                    $userList[] = $utilisateur;
            }
            return $userList;
        }catch(PDOException $e){
            die ("Erreur : ".$e->getMessage());
        }
    }
    

    public function get($id){
        // UTILISATEUR
            $query = "select * from `UTILISATEUR` WHERE `idU`=?";
            try{
                $traitement = $this->db->prepare($query);
                $traitement->bindparam(1,$id);
                $traitement->execute();
            }catch(PDOException $e){
                die ("Erreur : ".$e->getMessage());
            }
            $row = $traitement->fetch();
        // Activiter
            $query = "select * from `pratique` WHERE `idU`=?";
            try{
                $traitementPratique = $this->db->prepare($query);
                $traitementPratique ->bindparam(1,$id);
                $traitementPratique ->execute();
            }
            catch(PDOException $e){
                die ("Erreur : ".$e->getMessage());
            }
            
            while ($rowActiviter = $traitementPratique->fetch()) {
                $activite = new Activite($rowActiviter['nomA']);
                $activite -> setId($rowActiviter['idA']);
                $actList[] = $activite;
            }
        // Creation d'utilisateur
            $utilisateur = new Utilisateur( $row['idU'],$row['pseudoU'],
                                            $row['nomU'],$row['prenomU'],
                                            $row['mailU'],$row['telU'],
                                            $row['villeU'],$row['distanceU'],
                                            $row['mdpU'],$row['ddnU'],
                                            $row['bioU'],
                                            $row['LAT'],$row['LONG'],
                                            $actList );

            $utilisateur->setId($row['idU']);
        return $utilisateur;
    }

    
    public function getActivite($id){
        $query = "Select `nomA` from `ACTIVITE`, `FAIRE` where ACTIVITE.idA = FAIRE.idA and `idU`=?";
        try{
            $traitement = $this->db->prepare($query);
            $traitement->bindparam(1,$id);
            $traitement->execute();            
        } catch (Exception $ex) {
            die("Erreur : ".$ex->getMessage());
        }
        while ($row = $traitement->fetch()){
            echo " ".$row;
        }
    }
    
}
