<?php
class Hund
{
	// Attribute
	private $name = "Fifi";
	
	// KOnstruktor
	public function __construct() {
		echo "Objekt der Klasse Hund erzeugt";
		/*
		Da wir das Objekt der Klasse Hund GANZ OBEN in der 
		HTML-Datei erzeugen, wird diese Ausgabe außerhalb des 
		HTML-Blocks vorgenommen. Das ist streng genommen natürlich
		Schwachsinn. Aber so sehen wir immerhin, dass da irgendwas
		passiert.
		
		*/
	}
	
	// Methoden

	public function bellen() {
		echo "Wauwau";
	}
	
	public function methodeTesten() {
		echo "<p style='color: red; font-size: 2em;'>Methode erfolgreich aufgerufen!</p>";
	}

}

?>