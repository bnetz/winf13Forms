<?php
// Fehleranzeige einschalten - das müssen Sie nicht verstehen, aber es hilft
// Ihnen vielleicht weiter
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    // AUFGABE
    // Importieren Sie hier die Klasse Formhandler und erzeugen Sie ein neues
    // Objekt dieser Klasse.
    // Vergessen Sie nicht, das $_POST-Array an den Konstruktor zu übergeben.




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>6 Formularhandling mit OOP, Level 1: Übung 1</title>
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
            <h1>6 Formularhandling mit OOP - LEVEL 1 (einfach)</h1>
            <p class="lead">Wir verwenden die Klasse <code>Formhandler</code>.</p>
        </div>

        <!-- #### FORMULAR START ### -->
        <div class="row border rounded p-3">

            <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
                <label for="tfName">Dein Name:</label>
                <input type="text" name="tfName" placeholder="John Doe …">
                <input type="submit" name="btSubmit">
            </form>
        </div>
        <!-- #### FORMULAR ENDE ### -->

        <div class="row">
            <h2>Ihre Aufgaben</h2>
            <p><strong>Achtung 1:</strong> Sie arbeiten NUR in dieser Datei (index.php). In der Klasse Formhandler machen Sie <strong>nichts</strong>.</p>
            <p><strong>Achtung 2:</strong> Wenn Sie die Übung gemacht haben und die Seite mit nicht abgeschicktem Formular laden, werden Sie eine Fehlermeldung erhalten ("undefined index" o.ä.). Das ist ok so. <strong>Nur wenn Sie alles gut checken</strong>, sollten Sie versuchen, diese Fehlermeldung zu vermeiden.</p> 
            <ol>
                <li>Importieren Sie die Klasse <code>Formhandler</code> und erzeugen Sie ein neues Objekt.</li>
                <li>Rufen Sie an einer geeigneten Stelle die Methode <code>outputInput()</code> auf.</li>
                <li>Verwenden Sie im folgenden Text die Methode <code>showTextfieldName()</code>.</li>
            </ol>
            <p>Super! Sie haben es gecheckt und haben das Textfeld ???! ausgewertet!</p>
        </div>

        <div class="row mt-5">

        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>