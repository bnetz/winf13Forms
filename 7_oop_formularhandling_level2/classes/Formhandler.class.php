<?php
class Formhandler
{
	// Attribute
	private $postArray;
	private $rbTerminName = "rbTermin"; // so heißt der Radiobutton Termin
	private $selKuchenName = "selKuchen"; // so heißt das select-Feld Kuchen
	private $btSubmitName = "btSubmit"; // so heißt der Submit-Button

	// Konstruktor
	public function __construct($data)
	{
		$this->postArray = $data;
		echo "Formhandler initialisiert";
		if($this->isSubmitted()) {
			echo "-- Formular wurde abgeschickt --";
		} else {
			echo "-- Formular wurde NICHT abgeschickt --";
		}
	}


	// Methoden
	public function isSubmitted() {

		if (isset($this->postArray[$btSubmitName])) {
			return true;
		} else {
			return false;
		}
	}
	public function isTfNameEmpty() {
		if(empty($this->postArray['tfName'])) {
			return true;
		} else {
			return false;
		}
	}
	public function processInputAdvanced()	{
		if($this->isSubmitted()) {
			if($this->isTfNameEmpty()) {
				return "Bitte Namen eingeben.";
			} else {
				return "Willkommen, " . $this->postArray['tfName'] . "!";
			}
		} else {
			return "Bitte das Formular erst abschicken.";
		}
	}
	public function getValueOfTfName() {
		return $this->postArray['tfName'];
	}

	public function getRbTerminName() {
		return $this->rbTerminName;
	}
	public function getSelKuchenName() {
		return $this->selKuchenName;
	}
	public function getBtSubmitName() {
		return $this->btSubmitName;
	}
}
