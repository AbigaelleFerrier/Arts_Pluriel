<?php

	class Message {

		private $idM;
		private $textM;
		private $recu;
		private $envoyer;


		/* CONTRUC */
		public function __construct ($idM, $textM, $recu, $envoyer) {
			$this->idM		= $idM;
			$this->textM	= $textM;
			$this->recu		= $recu;
			$this->envoyer	= $envoyer;
		}


		/* SETER GETER */
		function getId() { return $this->idM; }
                function getText() { return $this->textM; }
                function getIdRecois() { return $this->recu; }
                function getIdEnvoie() { return $this->envoyer; }

                function setIdM($idM) { $this->idM = $idM; }
                function setTextM($textM) { $this->textM = $textM; }
                function setRecu($recu) { $this->recu = $recu; }
                function setEnvoyer($envoyer) { $this->envoyer = $envoyer; }


	}