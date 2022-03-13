<?php
	require_once('classes/Katze.class.php');
  $katzi = new Katze();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>5 - OOP in PHP - Tierübung</title>
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
                <h1>5 - OOP in PHP - Tierübung</h1>
                <p class="lead">Wir verwenden zwei unterschiedliche Tier-Klassen.</p>
            </div>
            <div class="row">
            <h2>Katze</h2>
            <p>Lassen Sie hier die Katze miauen. Geben Sie außerdem den Namen der Katze schön formatiert in der Form »Ich heiße katzenname« aus.</p>
            <div>
            	<p>… Hier miaut die Katze und sagt ihren Namen, alles innerhalb des div-Blocks …</p>
            
            </div>
            <h2>Wellensittich</h2>
            <ol>
            	<li>Erzeugen Sie eine neue Klasse <code>Wellensittich</code>. Diese Klasse erhält zwei Methoden (z.B.: <code>piepsen()</code> oder <code>flattern()</code> oder <code>sprechen()</code>)</li>
            	<li>Importieren Sie diese Klasse. Das machen Sie ganz oben in der Datei mit einer zweiten <code>require_once</code>-Anweisung.</li>
            	<li>Erzeugen Sie ein Objekt der Klasse <code>Wellensittich</code> und lassen Sie es piepsen, flattern, sprechen …</li>
            </ol>
            <p>Der Wellensittich wird aktiv:</p>
            <p>… Hier rufen Sie die Methoden des Wellensittich-Objekts auf …</p>
            </div>
            
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
