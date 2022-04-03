<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<title>6a - Konditorei Metz - Startseite</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/metzStylesShouldNotBeTouched.css">
</head>

<body>
	<h1 class="logo">Konditorei Metz</h1>
	<div class="bodyStartseite">
		<p><small><a href="anleitung_konditorformulare.docx">Anleitung: anleitung_konditorformulare.docx</a> (Word)</small></p>
		<h2>Formular 1: Wie viel Gehalt in wie vielen Monaten?</h2>
		<p>Hier können meine Mitarbeiter/innen ausrechnen, wie viel Geld sie in einem bestimmten Zeitraum verdienen.</p>
		<p>Sie geben in ein Feld die Anzahl der Monate ein und in ein anderes Feld das Gehalt, das sie monatlich verdienen. Dann gibt das System etwas aus wie "Nach 3 Monaten hast du 6000 Euro verdient."</p>
		<div class="bg-light border p-2 mt-2 mb-2">
			<p>Tipp: Da muss ich wohl mit einer zählergesteuerten Schleife agieren ... Das war doch etwas wie</p>
			<pre><code>for($monat = 1; $monat <= 3; $monat++) { ... }</code></pre>
		</div>
		<p>Klar, dass ich das objektorientiert mache mit einer Formhandler-Klasse oder so ...</p>
		<form>

			..... formular ....
		</form>
		<hr>
		<h2>Formular 2: Wie lange dauert es, bis ich Millionär werde?</h2>
		<p>Cool wäre ja auch ein Formular, wo man sein Gehalt eingibt und dann wird berechnet, wie lange es dauert, bis man eine Million verdient hat ("Sie verdienen 3000 Euro monatlich - nach 28.312 Jahren sind Sie Millionär!").</p>
		<div class="bg-light border p-2 mt-2 mb-2">
			<p>Tipp: Da muss ich wohl mit einer while-Schleife agieren ... Das war doch etwas wie</p>
			<pre><code>$gehalt = 0; while($gehalt < 1000000) { // rechne irgendwas <br>$gehalt++; }</code></pre>
		</div>
		<form>

..... formular ....
</form>
	</div>
</body>

</html>