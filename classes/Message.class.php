<?php

	class Message {

		private $idM;
		private $textM;
		private $recu;
		private $envoyer;


		/* CONTRUC */
		public function __construct ($textM, $recu, $envoyer) {
			$this->textM	= $textM;
			$this->recu		= $recu;
			$this->envoyer	= $envoyer;
		}


		/* SETER GETER */
		function getId() { return $this->idM; }
                function getText() { return $this->textM; }
                function getIdRecois() { return $this->recu; }
                function getIdEnvoie() { return $this->envoyer; }

                function setId($idM) { $this->idM = $idM; }
                function setText($textM) { $this->textM = $textM; }
                function setRecu($recu) { $this->recu = $recu; }
                function setEnvoyer($envoyer) { $this->envoyer = $envoyer; }


	}