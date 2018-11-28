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

		private $TabActivite = array();

		/* CONTRUC */
		public function __construct ($id,$pseudoU, $nomU, $prenomU, $mailU, $telU, $villeU, $distanceU, $mdpU, $ddnU,$bioU,$LAT,$LONG, $TabActivite)
		{
			$this->idU 				= $id;
			$this->pseudoU			= $pseudoU;
			$this->nomU				= $nomU;
			$this->prenomU			= $prenomU;
			$this->mailU			= $mailU;
			$this->telU				= $telU;
			$this->villeU			= $villeU;
			$this->distanceU		= $distanceU;
			$this->mdpU 			= $mdpU;
			$this->ddnU 			= $ddnU;
            $this->bioU				= $bioU;
            $this->LAT				= $LAT;
            $this->LONG				= $LONG;
            $this->TabActivite 		= $TabActivite;
		}


		/* SETTER GETTER */
		function getId() 		{ return $this->idU; 		}
        function getPseudo() 	{ return $this->pseudoU; 	}
        function getNom() 		{ return $this->nomU; 		}
        function getPrenom() 	{ return $this->prenomU; 	}
        function getMail() 		{ return $this->mailU; 		}
        function getTel() 		{ return $this->telU; 		}
        function getVille() 	{ return $this->villeU; 	}
        function getDistance() 	{ return $this->distanceU; 	}
        function getMdp() 		{ return $this->mdpU; 		}
        function getDdn() 		{ return $this->ddnU; 		}
        function getBio() 		{ return $this->bioU; 		}
        function getLat() 		{ return $this->LAT; 		}
        function getLong() 		{ return $this->LONG; 		}
        function getActivite()  { return $this->TabActivite;    }
                              
        function setId($idU) 			{ $this->idU 		= $idU; }
        function setPseudo($pseudoU) 	{ $this->pseudoU 	= $pseudoU; }
        function setNom($nomU) 			{ $this->nomU 		= $nomU; }
        function setPrenom($prenomU) 	{ $this->prenomU	= $prenomU; }
        function setMail($mailU) 		{ $this->mailU 		= $mailU; }
        function setTel($telU) 			{ $this->telU 		= $telU; }
        function setVille($villeU)		{ $this->villeU 	= $villeU; }
        function setDistance($distanceU){ $this->distanceU 	= $distanceU; }
        function setMdp($mdpU) 			{ $this->mdpU 		= $mdpU; }
        function setDdn($ddnU) 			{ $this->ddnU 		= $ddnU; }
        function setBio($bioU) 			{ $this->bioU 		= $bioU; }
        function setLat($LAT) 			{ $this->LAT 		= $LAT; }
        function setLong($LONG) 		{ $this->LONG 		= $LONG; }
       
                
		/* METHODE */
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


		public function getUtilisateursProches(){
			$tabUsers = array();

			$manager = new UtilisateurManager(database::getDB());
			$allUsers = $manager->getList("WHERE idU<>". $this->idU);
			
			foreach ($allUsers as $key => $value) {
				$meter = $this->distance($this->LAT, $this->LONG, $value->getLat(), $value->getLong());
				
				if ($this->distanceU >= $meter) {
					$tabUsers[] = $value;
				}
			}
			return $tabUsers;
		}


		private function distance($lat1, $lng1, $lat2, $lng2) {
	        $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
	        $rlo1 = deg2rad($lng1);
	        $rla1 = deg2rad($lat1);
	        $rlo2 = deg2rad($lng2);
	        $rla2 = deg2rad($lat2);
	        $dlo = ($rlo2 - $rlo1) / 2;
	        $dla = ($rla2 - $rla1) / 2;
	        $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin($dlo));
	        $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
	        //
	        $meter = ($earth_radius * $d);
	        return $meter/1000;
    	}

	}