<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
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
                <h1>1 Wiederholung Formulare</h1>
                <p class="lead">14.02.2022 - Formular einbauen und auswerten.</p>
            </div>
            <div class="row">
            <p>Bauen Sie ein Formular ein. Alle Elemente sind mit Labels versehen! Der User gibt ein:</p>
                <ul>
                	<li>Vorname (text)</li>
                	<li>Nachname (text)</li>
                	<li>E-Mail (email)</li>
                	<li>Alter (number)</li>
                </ul>
                <p>Außerdem natürlich ein Submit-Button. Beim Absenden wird das Formular auf eine neue Seite geleitet und eine Zusammenfassung der eingegebenen Daten ausgegeben.</p>
            </div>
            <div class="row border rounded p-3">
            	<p>Hier Ihr Formular …………</p>
            
            </div>
            <div class="row mt-5">
            	<h3>Checkliste</h3>
            	<ul>
            		<li>Zielseite bauen (am besten diese Seite duplizieren, Arbeitsanweisung rauswerfen und Überschrift ändern)</li>
            		<li>Formular anlegen (form-Tag öffnend/schließend, method und action nicht vergessen)</li>
            		<li>Formular-Elemente ins Formular setzen, gerne copy-paste bspw. von der Bootstrap-Seite; Labels nicht vergessen; Submit-Element nicht vergessen</li>
            		<li>Auf der Zielseite php öffnen und schließen; Vorname, Nachname, E-Mail, Alter aus dem POST-Array holen</li>
            		<li>Werte per echo ausgeben</li>
            	</ul>
            </div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
