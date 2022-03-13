<?php
class Formhandler
{
	// Attribute
	private $lieblingsfach = "Wirtschaftsinformatik";
	
	// KOnstruktor
	public function __construct() {
		echo "Formhandler initialisiert";
		/*
		Da wir das Objekt der Klasse Formhandler GANZ OBEN in der 
		HTML-Datei erzeugen, wird diese Ausgabe außerhalb des 
		HTML-Blocks vorgenommen. Das ist streng genommen natürlich
		Schwachsinn. Aber so sehen wir immerhin, dass da irgendwas
		passiert.
		
		*/
	}
	
	// Methoden
	public function methodeTesten() {
		echo "<p style='color: red; font-size: 2em;'>Methode erfolgreich aufgerufen!</p>";
	}

}

?>