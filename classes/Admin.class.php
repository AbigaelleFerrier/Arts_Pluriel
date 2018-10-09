<?php

	class Admin {
		private $idAdm;
		private $pseudo;
		private $mdpAdm;
		private $mailAdm;


		/* CONTRUC */
		public function __construct ($idAdm, $pseudo, $mdpAdm, $mailAdm) {
			$this->idAdm 	= $idAdm;
			$this->pseudo 	= $pseudo;
			$this->mdpAdm 	= $mdpAdm;
			$this->mailAdm 	= $mailAdm;
		}


		/* SETER GETER */
		function getId() { return $this->idAdm; }
                function getPseudo() { return $this->pseudo; }
                function getMdp() { return $this->mdpAdm; }
                function getMail() { return $this->mailAdm; }

                function setIdAdm($idAdm) { $this->idAdm = $idAdm; }
                function setPseudo($pseudo) { $this->pseudo = $pseudo; }
                function setMdpAdm($mdpAdm) { $this->mdpAdm = $mdpAdm; }
                function setMailAdm($mailAdm) { $this->mailAdm = $mailAdm; }

                
		/* METHODE */
		public function passwordVerif($mailAVerif, $mdpAVerif) {
			if ($mailAVerif === $this->mailAdm && $mdpAVerif === $this->mdpAdm) {
				return true;
			}
			else {
				return false;
			}
		}
	}