<?php
class Formhandler
{
	// Attribute
	private $postArray;
	private $tfNameName = 'tfName';

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
	public function outputInput()
	{
		$name = $this->postArray[$this->tfNameName];
		echo "<p>Sie haben eingegeben: <strong>" . $name . "</strong></p>";
	}

	// Diese Methode gibt einen Wert ZURÜCK.
	// Wenn Sie die Methode als einfach nur aufrufen, passiert gar nichts.
	// Tipp: Verwenden Sie beim Aufruf (also in index.php) echo :-)
	public function showTextfieldName()
	{
		return $this->tfNameName;
	}
}
