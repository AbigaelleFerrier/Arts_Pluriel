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
    
    public function __construct($labelL,$telL,$villeL,$adresseL){
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

    function setId($idL) { $this->idL = $idL; }
    function setLabel($labelL) { $this->labelL = $labelL; }
    function setTel($telL) { $this->telL = $telL; }
    function setVille($villeL) { $this->villeL = $villeL; }
    function setAdresse($adresseL) { $this->adresseL = $adresseL; }


}
