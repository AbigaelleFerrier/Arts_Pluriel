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
class Lieux {
    //put your code here
     private $idL;
    private $labelL;
    private $telL;
    private $villeL;
    private $adresseL;
    
    public function __construct($idL,$labelL,$telL,$villeL,$adresseL){
        $this-> idL = $idL;
        $this-> labelL = $labelL;
        $this-> telL = $telL;
        $this-> villeL = $villeL;
        $this-> adresseL = $adresseL;
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
