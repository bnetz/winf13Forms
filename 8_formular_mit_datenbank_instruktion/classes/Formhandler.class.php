<?php
class Formhandler
{
	// Attribute
	private $postArray;

	// Konstruktor
	public function __construct($data)
	{
		$this->postArray = $data;
		echo "Formhandler initialisiert";
	}


	// Methoden
	public function isSubmitted()
	{
		if (isset($this->postArray['btSubmit'])) {
			return true;
		} else {
			return false;
		}
	}
	public function processInput()
	{
		$name = $this->postArray['tfName'];
		if ($name == "Metz") {
			return "Das kann nicht sein!";
		} else if ($name == "") {
			return "Bitte Namen eingeben.";
		} else {
			return "Willkommen, " . $name . "!";
		}
	}
}
