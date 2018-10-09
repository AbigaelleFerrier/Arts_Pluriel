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
    
    function getId() { return $this->idL; }
    function getLabel() { return $this->labelL; }
    function getTel() { return $this->telL; }
    function getVille() { return $this->villeL; }
    function getAdresse() { return $this->adresseL; }

    function setIdL($idL) { $this->idL = $idL; }
    function setLabelL($labelL) { $this->labelL = $labelL; }
    function setTelL($telL) { $this->telL = $telL; }
    function setVilleL($villeL) { $this->villeL = $villeL; }
    function setAdresseL($adresseL) { $this->adresseL = $adresseL; }


}
