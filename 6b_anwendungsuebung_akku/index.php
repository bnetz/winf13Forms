<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<title>Batterien-Metz - Startseite</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/metzStylesShouldNotBeTouched.css">
</head>

<body>
	<h1 class="logo">Batterien-Metz</h1>
	<div class="bodyStartseite">
		<h2>1) Selbstentladung</h2>
		<p>Wir wollen die Restkapazität eines Akkus ausrechnen. In ein Formular gibt der User die Marke, die Gesamtkapazität (in mAh - Milliamperestunden) und die Lagerzeit (in Monaten) ein. Beim Abschicken des Formulars wird berechnet, wie hoch der Ladestand des Akkus noch ist (pro Monat verliert der Akku 2 Prozent seiner Ladung). Ausgabe: </em>Nach 4 Monaten hat der Duracell-Akku noch 3000 mAh Ladung.</em> Die 4, die 3000 und "Duracell" sind berechnet bzw. Werte aus dem Formular.</p>
		<p>Natürlich läuft das alles objektorientiert.</p>
		<form>

			..... formular ....
		</form>
		<h2>2) Selbstentladung mit Schwellwert</h2>
		<p>Gleiche Aufgabe wie oben (Formular kopieren, Namen der Formularelemente ändern!), aber erweitert um: Sobald nur noch 4000 mAh Ladestand vorhanden ist, sinkt die monatliche Selbstentladung auf einen Wert von 1%. Ausgabe wie oben.</p>
		<p>Tipp: Da wir objektorientiert arbeiten, können Sie die Klasse, die Sie in Aufgabe 1 programmiert haben, nutzen! Sie müssen nur wenig verändern.</p>
		<form>
			..... formular ....
		</form>

		<h2>3) Selbstentladung mit Warnmeldung</h2>
		<p>Benutzen Sie Aufgabe 2 (Formular kopieren, Namen der Formularelemente ändern!), aber erweitert um: Nach 2 Jahren sinkt die Genauigkeit der Berechnung so stark, dass ein Hinweis eingeblendet werden soll (»Achtung - das Ergebnis kann ungenau sein.«). Das erledigen Sie über eine Methode warnmeldungAnzeigen(), die aufgerufen wird, wenn der Zeitraum der Berechnung bei mehr als zwei Jahren liegt.</p>
		<p>Tipp: Da wir objektorientiert arbeiten, können Sie die Klasse, die Sie in Aufgabe 1 programmiert haben, nutzen! Sie müssen nur wenig verändern.</p>
		<form>
			..... formular ....
		</form>
		
	</div>
</body>

</html>