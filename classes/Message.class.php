<?php

	class Message {

		private $idM;
		private $textM;
		private $recu;
		private $envoyer;
                private $idF;


		/* CONTRUC */
		public function __construct ($textM, $recu, $envoyer, $idF) {
			$this->textM	= $textM;
			$this->recu		= $recu;
			$this->envoyer	= $envoyer;
                        $this->idF      = $idF;
		}


		/* SETER GETER */
		function getId() { return $this->idM; }
                function getText() { return $this->textM; }
                function getIdRecois() { return $this->recu; }
                function getIdEnvoie() { return $this->envoyer; }
                function getIdF(){return $this->idF;}

                function setId($idM) { $this->idM = $idM; }
                function setText($textM) { $this->textM = $textM; }
                function setRecu($recu) { $this->recu = $recu; }
                function setEnvoyer($envoyer) { $this->envoyer = $envoyer; }
                function setIdF($idF){$this->idF = $idF;}


	}