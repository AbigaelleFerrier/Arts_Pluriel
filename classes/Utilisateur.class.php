<?php
	class Utilisateur {

		private $idU;
		private $pseudoU;
		private $nomU;
		private $prenomU;
		private $mailU;
		private $telU;
		private $villeU;
		private $distanceU;
		private $mdpU;
                private $ddnU;
                private $bioU;
                private $LAT;
                private $LONG;

		private $TabSousActivite = array();
		private $TabActivite 	 = array();


		/* CONTRUC */
		public function __construct ($id,$pseudoU, $nomU, $prenomU, $mailU, $telU, $villeU, $distanceU, $mdpU, $ddnU,$bioU,$LAT,$LONG)
		{
                    $this->idU = $id;
			$this->pseudoU			= $pseudoU;
			$this->nomU			= $nomU;
			$this->prenomU			= $prenomU;
			$this->mailU			= $mailU;
			$this->telU			= $telU;
			$this->villeU			= $villeU;
			$this->distanceU		= $distanceU;
			$this->mdpU 			= $mdpU;
			$this->ddnU 			= $ddnU;
                        $this->bioU                     = $bioU;
                        $this->LAT                      = $LAT;
                        $this->LONG                     = $LONG;

		}


		/* SETER GETER */
		function getId() { return $this->idU; }
                function getPseudo() { return $this->pseudoU; }
                function getNom() { return $this->nomU; }
                function getPrenom() { return $this->prenomU; }
                function getMail() { return $this->mailU; }
                function getTel() { return $this->telU; }
                function getVille() { return $this->villeU; }
                function getDistance() { return $this->distanceU; }
                function getMdp() { return $this->mdpU; }
                function getDdn() { return $this->ddnU; }
                function getBio() { return $this->bioU; }
                function getLat() { return $this->LAT; }
                function getLong() { return $this->LONG; }

                function getTabSousActivite() { return $this->TabSousActivite; }
                function getTabActivite() { return $this->TabActivite; }

                function setId($idU) { $this->idU = $idU; }
                function setPseudo($pseudoU) { $this->pseudoU = $pseudoU; }
                function setNom($nomU) { $this->nomU = $nomU; }
                function setPrenom($prenomU) { $this->prenomU = $prenomU; }
                function setMail($mailU) { $this->mailU = $mailU; }
                function setTel($telU) { $this->telU = $telU; }
                function setVille($villeU) { $this->villeU = $villeU; }
                function setDistance($distanceU) { $this->distanceU = $distanceU; }
                function setMdp($mdpU) { $this->mdpU = $mdpU; }
                function setDdn($ddnU) { $this->ddnU = $ddnU; }
                function setBio($bioU) { $this->bioU = $bioU; }
                function setLat($LAT) { $this->LAT = $LAT; }
                function setLong($LONG) { $this->LONG = $LONG; }

                function setTabSousActivite($TabSousActivite) { $this->TabSousActivite = $TabSousActivite; }
                function setTabActivite($TabActivite) { $this->TabActivite = $TabActivite; }

                
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