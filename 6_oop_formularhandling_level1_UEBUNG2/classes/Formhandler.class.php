<?php
class Formhandler
{
	// Attribute

	// AUFGABE
	// Hier ein Attribut $data deklarieren
	// Hier ein Attribut $nameOfSubmitButton deklarieren und mit "btSubmit" initialisieren


	// Konstruktor
	public function __construct($p)
	{
		echo "Formhandler initialisiert";

		// AUFGABE:
		// Hier das Attribut $data mit dem Konstruktorparameter initialisieren.
	}


	// Methoden
	public function showContentOfTextfield()
	{
		// AUFGABE
		// Wenn das tfName leer ist, wird "Bitte Name eingeben!" AUSgegeben (also mit echo).
		// In allen anderen Fällen wird der Inhalt des Textfelds ausgegeben.
		// Sie brauchen keine HTML-Tags (<p> usw.) ausgeben.

		// Die folgende Zeile können Sie löschen.
		echo "test";
	}


	public function formIsSubmitted()
	{
		// AUFGABE
		// Prüfen Sie, ob das Formular abgeschickt wurde.
		// Wenn ja, geben Sie true ZURÜCK (also nicht mit echo ausgeben, sondern
		// mit return zurückgeben).
		// Wenn nein, geben Sie false zurück.

		// Die folgende Zeile können Sie löschen.
		return true;
	}

	public function getNameOfSubmitButton()
	{
		// AUFGABE
		// Das hier ist ein Getter. Remember? :)
		// Er gibt den Wert des Attributs nameOfSubmitButton ZURÜCK.

		// Die folgende Zeile können Sie löschen.
		return "Hansi";
	}
}
