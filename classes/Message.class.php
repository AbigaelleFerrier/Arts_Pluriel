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
	}