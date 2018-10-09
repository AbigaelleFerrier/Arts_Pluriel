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
class SousActivite {
    //put your code here
    private $idP;
    private $specialite;
    
    private $Activite;
    
    public function __construct($Activite,$specialite){
        $this-> Activite = $Activite;
        $this-> specialite = $specialite;
    }
    
    function getId() { return $this->idP; }
    function getSpecialite() { return $this->specialite; }
    function getIda() { return $this->Activite; }

    function setId($idP) { $this->idP = $idP; }
    function setSpecialite($specialite) { $this->specialite = $specialite; }
    function setActivite($Activite) { $this->Activite = $Activite; }


}
