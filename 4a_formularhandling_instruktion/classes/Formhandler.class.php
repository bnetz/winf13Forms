<?php
class Formhandler
{
	// Attribute
	private $postArray;

	// Konstruktor
	public function __construct($data)
	{
		echo "Formhandler initialisiert";
		// Wenn das irgendwo steht, wissen wir, dass erfolgreich ein Objekt
		// der Klasse Formhandler angelegt wurde

		$this->postArray = $data;
		// Initialisierung von postArray mit dem $_POST-Array aus dem Formular
		// Jetzt können wir mit $this->postArray auf die Formulardaten zugreifen

		// Jetzt prüfen wir, ob das Formular abgeschickt wurde oder nicht und 
		// nehmen eine entsprechende Ausgabe vor.
		if (isset($this->postArray['btSubmit'])) {
			echo "ABGESCHICKT";
		} else {
			echo "NICHT ABGESCHICKT";
		}
	}


	// Methoden

	// Diese Methode gibt aus, was ins Feld tfName eingegeben wurde.
	public function processInput()
	{
		$name = $this->postArray['tfName'];
		echo "<p>Sie haben eingegeben: <strong>" . $name . "</strong></p>";
	}
}
