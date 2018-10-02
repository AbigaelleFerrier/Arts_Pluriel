<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Activite
 *
 * @author etudiant
 */
class Activite {
    //put your code here
    private $idA;
    private $nomA;
    
    private $Lieux=array();
    
    public function __construct($nomA){
        $this-> nomA = $nomA;
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
    
    public function addLieuxActivite($Lieux){
        if (!(isset($this->Lieux[$Lieux->id]))){
            array_push($this->Lieux,$Lieux);
            $this->Lieux[$Lieux->id] = $Lieux;
        }
    }
    
    /*public function getLieuActivite(){
        $obj=array();
        foreach($this->Lieux as $Lieux){
            array_push($obj, $Lieux->labelL);
        }
        return $obj;
    }*/
}
