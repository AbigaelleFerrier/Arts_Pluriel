<?php
	class Utilisateur {

		private $idU;
		private $pseudoU;
		private $nomU;
		private $prenomU;
		private $mailU;
		private $telU;
		private $adresseU;
		private $villeU;
		private $distanceU;
		private $mdpU;

		private $TabSousActivite = array();
		private $TabActivite 	 = array();


		/* CONTRUC */
		public function __construct ($idU, $pseudoU, $nomU, $prenomU, $mailU, $telU, $adresseU, $villeU, $distanceU, $mdpU, $ddnU, $TabSousActivite, $TabActivite)
		{
			$this->idU				= $idU;
			$this->pseudoU			= $pseudoU;
			$this->nomU				= $nomU;
			$this->prenomU			= $prenomU;
			$this->mailU			= $mailU;
			$this->telU				= $telU;
			$this->adresseU			= $adresseU;
			$this->villeU			= $villeU;
			$this->distanceU		= $distanceU;
			$this->mdpU 			= $mdpU;
			$this->ddnU 			= $ddnU;

			$this->TabSousActivite	= $TabSousActivite;
			$this->TabActivite		= $TabActivite;
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
		public function addTabSousActivite($addSousActivite) {
			$this->TabSousActivite->append($addSousActivite);
		}

		public function addTabActivite($addActivite) {
			$this->TabActivite->append($addActivite);
		}

		public function passwordVerif($mailAVerif, $mdpAVerif) {
			if ($mailAVerif === $this->mailU && $mdpAVerif === $this->mdpU) {
				return true;
			}
			else {
				return false;
			}
		}
	}