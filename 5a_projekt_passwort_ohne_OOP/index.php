<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>6 Formularhandling mit OOP, Level 1: Abschlussübung 1</title>
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
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
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
            <h1>6 Formularhandling mit OOP - LEVEL 1 (einfach): Abschlussübung 1</h1>
            <p class="lead">Wir programmieren <strong>nur</strong> in der Datei <code>index.php</code>.</p>
        </div>

        <div class="row">
            <h2>Aufgabe</h2>
            <p>Bauen Sie ein Formular, das einen Usernamen und ein Passwort (<code>…type = "password"</code>) entgegennimmt. Nach Abschicken des Formulars soll geprüft werden, ob das Passwort "r2D2!" ist. Wenn ja, wird in grüner Schrift ausgegeben "Erfolgreich eingeloggt", ansonsten in roter Schrift "Passwort falsch - beep beep beep".<br>Selbstverständlich dürfen beim erstmaligen Laden der Seite keine "index not defined"-Fehler angezeigt werden!</p>
            <p>Wenn das Formular leer abgesendet wurde, wird ausgegeben "Bitte Formular ausfüllen!!"</p>
            <p><strong>All das erledigen Sie OHNE Verwendung einer Klasse - NUR in der index.php.</strong></p>
            <p><small>Sie denken jetzt vielleicht, hä, ohne Klasse ist das doch doof? Und Sie haben völlig Recht, aber ich will, dass Ihnen in den beiden Abschlussübungen nochmal die Unterschiede zwischen OOP und nicht-OOP klar werden.</small></p>
        </div>
        <div class="row mt-2 mb-3 border pt-2">
        <p><strong>Tipp</strong></p>
            <p>Ich an Ihrer Stelle würde die Fehleranzeige von PHP einschalten. Das geht mit:</p>
            <pre><code>ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);</code></pre>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3 bg-light">

            HIER SOLL EIN FORMULAR STEHEN
        </div>
        <!-- #### FORMULAR ENDE ### -->
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>