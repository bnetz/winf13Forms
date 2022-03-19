<?php
class Formhandler
{
	// Attribute
	private $data;

	// Konstruktor
	public function __construct($pData)
	{
		$this->data = $pData;
		echo "Formhandler initialisiert";
	}


	// Methoden
	public function isSubmitted(){}
	// Gibt true zurück, falls das Formular abgeschickt wurde.

	public function isTfGrundEmpty(){}
	// Gibt true zurück, falls tfGrund leer ist 


	// Hier alle Getter
}
