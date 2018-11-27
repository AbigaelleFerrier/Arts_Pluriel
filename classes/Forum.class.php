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
class Forum {
    //put your code here
    private $idF;
    private $titreF;
    private $idA;
    
    private $TabMessage = array();
        
    public function __construct($titreF,$idA){
        $this-> titreF = $titreF;
        $this-> idA = $idA;
    } 
    
    function getId()    { return $this->idF; }
    function getTitre()   { return $this->titreF; }
    function getAct() { return $this->idA; }
    function getMessages() { return $this->TabMessage;}

    function setId($idF) { $this->idF = $idF; }
    function setTitre($titreF) { $this->titreF = $titreF; }
    function setAct($idA) { $this->idA = $idA; }
    function setMessages($messages) { $this->TabMessage = $messages; }
    
    
}
