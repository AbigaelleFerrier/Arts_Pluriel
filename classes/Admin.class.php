<?php

	class Admin {
		private $idAdm;
		private $pseudo;
		private $mdpAdm;
		private $mailAdm;


		/* CONTRUC */
		public function __construct ($pseudo, $mdpAdm, $mailAdm) {
			$this->pseudo 	= $pseudo;
			$this->mdpAdm 	= $mdpAdm;
			$this->mailAdm 	= $mailAdm;
		}


		/* SETER GETER */
		function getId() { return $this->idAdm; }
                function getPseudo() { return $this->pseudo; }
                function getMdp() { return $this->mdpAdm; }
                function getMail() { return $this->mailAdm; }

                function setId($idAdm) { $this->idAdm = $idAdm; }
                function setPseudo($pseudo) { $this->pseudo = $pseudo; }
                function setMdp($mdpAdm) { $this->mdpAdm = $mdpAdm; }
                function setMail($mailAdm) { $this->mailAdm = $mailAdm; }

                
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