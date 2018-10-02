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
		public function __get ($property) {
			if (property_exists($this, $property)) {
				return $this->$property;
			}
		}

		public function __set($property, $value) {
			if (property_exists($this, $property)) {
				$this->$property = $value;
			}
		}

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