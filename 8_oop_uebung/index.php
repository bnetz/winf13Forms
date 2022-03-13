<?php
// mit require_once(pfad/zur/datei.php) die Klasse einbinden
// neues OBjekt der Klasse erstellen

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>5 - Übung: Erste OOP in PHP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Start</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://startbootstrap.com/template/bare">Template Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://informatik-bg.de/html-php-sql/html-css-templates-bootstrap">ibg</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ressourcen</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
																<li><a class="dropdown-item" href="https://www.w3schools.com/html/html_form_input_types.asp">HTML Input Types</a></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap Einführung</a></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/overview/">Formulare in Bootstrap</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/overview/">Übersicht/Textfelder</a></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/checks-radios/">Checkboxen/Radios</a></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/select/">Select-Dropdowns</a></li>
                                <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/forms/range/">Range-Slider</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>5 Übung zu OOP in PHP</h1>
                <p class="lead">Jetzt nochmal ganz langsam …</p>
            </div>
            <div class="row">
            <p>Sie sollen Folgendes tun:</p>
            <ol>
            	<li>Erzeugen Sie eine Klasse</li>
            	<li>Wir müssen diese Klasse importieren. Das machen wir ganz oben in der Datei mit <code>require_once('classes/Formhandler.class.php');</code></li>
            	<li>Wir erzeugen ein Objekt dieser Klasse bspw. mit <code>$f = new Formhandler();</code>. Dieses Objekt können wir ab sofort verwenden, z.B. mit <code>$f->methodeTesten</code>.</li>
            </ol>
            <p><strong>Methode testen:</strong></p>
            <?php
            		$f->methodeTesten();
            ?>
            </div>
            <div class="row border rounded p-3">

            	<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
            	<label for="test">Test:</label>
            	<input type="text" name="tfTest" disabled placeholder="Formular deaktiviert">
            	<input type="submit" name="btSubmit" disabled>
            	</form>
            
            </div>
            <div class="row mt-5">
            	<h3>Ihre Aufgabe</h3>
							<ol>
								<li>Schreiben Sie in der Klasse <code>Formhandler</code> eine neue Methode namens <code>schoenSagen()</code>, die das Wort "schön" ausgibt. <em>Achtung: Sie müssen kein neues Objekt der Klasse erzeugen, es reicht, wenn wir das einmal ganz oben tun.</em></li>
								<li>Rufen Sie diese Methode hier auf: DAS LEBEN IST ________!!! (da wo die Striche sind, soll die Methode ihr Wort hineinpusten)</li>
								<li>Schreiben Sie in der Klasse <code>Formhandler</code> eine Methode namens <code>lieblingsfachSagen()</code>, die das Attribut <code>$lieblingsfach</code> benutzt, um den Satz »Mein Lieblingsfach ist xyz« schön formatiert auszugeben.</li>
								<li>Geben Sie diesen Satz hier aus:</li>
							</ol>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
