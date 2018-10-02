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
    
    public function __get($prop){
        if (property_exists($this, $prop)){
            return $this->$prop;
        }
    }
    
    public function __set($prop, $val) {
        if(property_exists($this, $prop)){
            $this->$prop = $val;
        }
    }
}
